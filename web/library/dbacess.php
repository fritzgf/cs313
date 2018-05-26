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
    foreach ($db->query('SELECT * FROM scriptures') as $row)
	{
		echo '<strong>' . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</strong> - "  . $row['content'];

		echo '<br/>';
		echo '<br/>';

  echo '<br/>';
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $book = $_POST['inputBook']; //get input text

  $stmt = $db->prepare('SELECT * FROM scriptures WHERE book=:book');
  $stmt->execute(array(':book' => $book));
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

}    




foreach ($rows as $row) {
	print $row["book"] . " " . $row["verse"] .":" . $row["chapter"]."<br/>";
}

	}
?>
