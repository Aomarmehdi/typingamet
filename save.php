<?php

  $data = json_decode(file_get_contents('php://input'), true); // Parse JSON data
  $time = $data['time'];
  $cpm = $data['cpm'];
  $mistake = $data['mistake'];
  $wpm = $data['wpm'];
  $modePunctuation = $data['modePunctuation'];
  $modeNumbers = $data['modeNumbers'];




$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "type";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$query = "insert into test (time, cpm, mistakes, wpm, cpm, mode_punctuation, mode_numbers) values ('$time', '$cpm', '$mistakes', '$wpm', '$cpm', '$mode_punctuation', '$mode_numbers')";
mysqli_query($con,$query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>hello world</h1>
</body>
</html>