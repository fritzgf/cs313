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
$user_question = $_GET["interviewText"];
$query = "SELECT * FROM interview_questions";
$statement = $db->prepare($query);
$statement->bindValue(":interviewText", $user_question, PDO::PARAM_STR);
$statement->execute();

foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $interview_question)
{
    $interviewText = $interview_questions["interviewText"];
    $date = $interview_questions["date"];
     
    echo "$interviewText";
    echo "<br>";
    echo "$date";
}
  ?>
