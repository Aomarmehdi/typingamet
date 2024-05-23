<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL); 

  include("signup/connection.php");

  session_start();
  $a = $_SESSION['user_id'];

  
  $data = json_decode(file_get_contents('php://input'), true); // Parse JSON data
  $time= $data['time'];
  $cpm = $data['cpm'];
  $mistake = $data['mistake'];
  $wpm = $data['wpm'];
  $modePunctuation = $data['modePunctuation'];
  $modeNumbers = $data['modeNumbers'];

// $_SESSION['time'] = $time;




  // $data = json_decode(file_get_contents('php://input'), true); // Parse JSON data
  // $time = $data['name'];
  // $cpm = $data['email'];
  // $mistake = $data['password'];
//   $query = "select max(id_test) from test where id_joueur = '$a' ";
//   $result = mysqli_query($con, $query);
//   $id_test = mysqli_fetch_assoc($result);
//   if ($id_test['max(id_test)'])  {
// $id_test = $id_test['max(id_test)'] + 1;
//   }else {
//     $id_test = $id_test['max(id_test)'] +1;
//     // $_SESSION['id_test'] = $id_test;
//   }

// print_r( empty($id_test['max(id_test)']));
    // $_SESSION['id_test'] = $id_test;
    // echo($_SESSION['id_test']);



$query = "insert into test(id_joueur, time, mistakes, wpm, cpm, mode_punctuation, mode_numbers) values ( '$a', '$time', '$mistake', '$wpm', '$cpm', '$modePunctuation', ' $modeNumbers')";
// $query = "insert into joueur(user_name, email, password) values ('$time', '$cpm', '$mistakes')";
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