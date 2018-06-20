<?php
// $userId= $_SESSION ["userData"]["user_id"];
// $interview_id= $_GET["userData"]["interview_id"];

$answer = htmlspecialchars($_POST["answer"]);
$userId = htmlspecialchars($_POST["user_id"]);
$interviewId = htmlspecialchars($_POST["interview_id"]);
$date = htmlspecialchars($_POST["date"]);

// echo "answer: $answer\n";
// echo "user_id: $userId\n";
// echo "interview_id: $interviewId\n";
// echo "date: $date\n";

// insert data to the database

$query = "INSERT INTO answers (answer, user_id, interview_id, date) VALUES (:answer, :user_id, :interview_id, :date)";

$statement = $db->prepare($query);
$statement->bindValue(":answer", $answer, PDO::PARAM_STR);
$statement->bindValue(":user_id", $userId, PDO::PARAM_INT);
$statement->bindValue(":interview_id", $interviewId, PDO::PARAM_INT);
$statement->bindValue(":date", $date, PDO::PARAM_STR);
// try{
$statement->execute();

// } catch(PDOException $e){ 
// echo $e->getMessage();
// exit;
// }
// var_dump($statement);
// exit;
header("Location: ../view/answers.php");
die();


?>
<?php
require("./../library/connections.php");
$linksId = htmlspecialchars($_GET["interview_id"]);

$db = get_db();
$query = "SELECT iq.id, iq.interviewtext, iq.date, iq.user_id, u.firstname FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id  WHERE iq.id=:id ORDER BY date DESC";
$statement = $db->prepare($query);
$statement->bindValue(":id", $linksId, PDO::PARAM_INT);
$statement->execute();
$row = $statement->fetch();
$interviewtext = $row["interviewtext"];
$firstname = $row["firstname"];
$date = $row["date"];

// echo "<hr>";
//   echo "<li>$interviewtext <br> $firstname - $date </li>";
//   echo "<hr>";
//   echo "<br>"

  ?>
  
  <?php
// call getInterviewq function


$userId= $_SESSION ["userData"]["id"];
$interview_id= $_GET["interview_id"];
$query = "SELECT a.id, a.answer, a.date, a.user_id, u.firstname FROM answers as a INNER JOIN users as u ON a.user_id= u.id ORDER BY date DESC";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
echo "<hr>";
echo "<li>$interviewtext <br> $firstname - $date </li>";
foreach ($rows as $row) {
	$userId = $row["user_id"]; 
	$answer = $row["answer"];
   $firstname = $row["firstname"];
   $date = $row["date"]; 
   
 
   echo "<hr>";
  
  echo "$user_id -$answer <br> $firstname - $date";
 
}
echo "<hr>";
?>
  