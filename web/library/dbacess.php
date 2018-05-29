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
$query= "SELECT in.interviewText, in.date, u.user_id FROM interview_questions in INNER JOIN users u ON in.interviewText = u.user_id WHERE interviewText = :interview_question_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':interview', $interviewText, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $interview_question)
{
    $interviewText = $interview_question["interviewText"];
    $date = $interview_question["date"];
     
    echo "$interviewText";
    echo "<br>";
    echo "$date";
}
  ?>
