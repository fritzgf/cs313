<?php

try{


$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PODExceptionption $ex)
{

echo 'Error!:' .$ex->getMessage();
die();

}
$query= "SELECT iq.interviewText, iq.date, u.user_id, u.firstName FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id";

foreach ($db->query('SELECT * FROM scriptures') as $row)
{
     
    echo "$interviewText";
    echo "<br>";
    echo "$date";
  
}
  ?>
