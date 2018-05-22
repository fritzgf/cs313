<?php
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["ec2-50-16-196-238.compute-1.amazonaws.com"];
$dbPort = $dbopts["5432"];
$dbUser = $dbopts["xfynifhtbreozx"];
$dbPassword = $dbopts["daa78691ddc422dc9ae852cd19fb42d9d77c9456672985b095ccdae735bf493"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
{
  echo $row['book'] . $row['chaptep'] . $row['verse'] . $row['content'];
  echo '<br/>';
}