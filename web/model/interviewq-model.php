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
$query = "SELECT id, interviewText, user_id FROM interview_questions";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$interview_questions = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($interview_questions as $interview_question) {
	$id = $interview_question["id"];
	$interviewText = $interview_question["interviewText"];
	$user_id = $interview_question["user_id"];
	echo "<li><a href='courseDetails.php?course_id=$id'>$interviewText - $user_id</a></li>";
}

?>