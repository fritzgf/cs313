<?php
foreach ($db->query('SELECT iq.interviewText, iq.date, iq.user_id, u.firstName FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id') as $row)
{
 
  echo  $row['interviewtext'];
  echo $row['date'];
  echo $row['firstName'];
    echo "<br>";  
}
?>