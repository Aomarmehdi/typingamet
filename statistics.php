<?php 
  session_start();
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

</body>
</html>