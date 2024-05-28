<?php 
  ini_set('display_errors', 1);
  error_reporting(E_ALL); 
  
  include("signup/connection.php");

  session_start();


  $user_id = $_SESSION['user_id'];

  $query  = "select * from test where id_joueur = '$user_id' ";
  $result = mysqli_query($con, $query);
  if($result) {
    $user_data = mysqli_fetch_all($result);
    // print_r($user_data) ;    

  }
  
$a= 0 ;
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./statistics.css"/>
  <link rel="shortcut icon" href="./images/gamepad-solid.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$r = $_SESSION['user_name'];?>'s Stats</title>
</head>

<body>
  <header>
    <a href="./index.php" class="aa">
      <div class="icon"><i class="fa-solid fa-gamepad"></i></div>
      <h1 class="text">TYPINGAME</h1>
    </a>
    <div class="username-db">
      <a href="./logout.php" class="logout-icon"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
  </header>
  <table>
    <thead>
      <tr>
        <th>joueur id</th>
        <th>Test</th>
        <th>Time</th>
        <th>Mistakes</th>
        <th>WPM</th>
        <th>CPM</th>
        <th>Mode Punctuation</th>
        <th>Mode Numbers</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($user_data as $aa=> $data) {?>
        <tr>
          <td><?php 
// $user_id = $_SESSION['user_id'];
echo $user_id;
?></td>
          <td><?php 
          if ( $a < count($user_data)) {
            $a += 1;
            echo $a  ;}?></td>
          <td><?php echo $data['2']?></td> 
          <td><?php echo $data['3']?></td>
          <td><?php echo $data['4']?></td>
          <td><?php echo $data['5']?></td>
          <td><?php 
          // echo $data['7'];

          echo  $data['6'];
          // if ($data['6'] === "true" && $data['7'] !== "false")
          //   echo "punctuation and numbers";
          // else {
          //   if ($data['6'] == "true") {
          //     echo "punctuation";}
          //   if ($data['7'] != "false"){
          //   echo "numbers";}
          // }
        ?></td>
        <td><?php echo $data['7']?></td>
          
      </tr>
      <?php } ?>

    </tbody>
  </table>
  
</body>
</html> 