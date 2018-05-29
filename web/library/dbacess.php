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

$user_iq = $_GET["interviewText"];

$query= "SELECT iq.interviewText, iq.date, u.user_id, u.firstName FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id";
var_dump($query);
$stmt = $db->prepare($query);
var_dump($stmt);
$stmt->bindValue(':interviewText', $user_iq, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $rows)
{
    $interviewText = $rows["interviewText"];
    $date = $rows["date"];
    $firstName = $rows["firstName"];
     
    echo "$interviewText";
    echo "<br>";
    echo "$date";
  
}
  ?>
