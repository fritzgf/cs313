<?php require("./../library/connections.php");

$db = get_db();


foreach ($db->query('SELECT iq.interviewtext, iq.date, iq.user_id, u.firstname FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id') as $row)
{
  echo "<hr>";  
  echo  $row['interviewtext']; 
   echo "<br>"; 
  echo  $row['firstname'];-$row['date']; 
  echo "<br>"; 
  echo "<hr>"; 
  echo "<br>";   
}
// $query = "SELECT id, interviewText, date FROM interview_questions";
// $statement = $db->prepare($query);
// // Bind any variables I need, here...
// $statement->execute();
// $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

// foreach ($rows as $row) {
// 	$id = $row["id"];
// 	$interviewText = $row["interviewText"];
//    $firstName = $row["firstName"];
//    $date = $row["date"];
   

//   echo "<li><a href='interviewq.php?user_id=$id'>$interviewText </a></li>";
//   echo "<li><a href='interviewq.php?user_id=$id'> $firstName </a></li>";
//   echo "<li><a href='interviewq.php?user_id=$id'> $date</a></li>";
// }

?>