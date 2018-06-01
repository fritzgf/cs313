<?php require("./../library/connections.php");

$db = get_db();


// foreach ($db->query('SELECT iq.interviewText, iq.date, iq.user_id, u.firstName FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id') as $row)
// {
//   echo "<hr>";  
//   echo  $row['interviewtext'];
//   echo "<br>"; 
//   echo $row['date'];
//   echo "<hr>"; 
//   echo "<br>";   
// }
$query = "SELECT iq.interviewText, iq.date, u.firstName FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$interview_questions = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($interview_questions as $interview_question) {
	$id = $interview_question["id"];
	$interviewText = $interview_question["interviewText"];
   $firstName = $interview_question["firstName"];
   $date = $interview_question["date"];
	echo "<li><a href='courseDetails.php?course_id=$id'>$interviewText - $firstName -  $date</a></li>";
}

?>