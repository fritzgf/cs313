<?php require("./../library/connections.php");

?>
<?php
foreach ($db->query('SELECT iq.interviewText, iq.date, iq.user_id, u.firstName FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id') as $row)
{
  echo "<hr>";  
  echo  $row['interviewtext'];
  echo "<br>"; 
  echo $row['date'];
  echo "<hr>"; 
  echo "<br>";   
}
?>