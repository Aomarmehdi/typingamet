<?php
session_start();
include("connection.php");
include("function.php");

if (isset($_POST['signUp'])){
  $user_name = $_POST['this_username'];
  $email = $_POST['this_email'];
  $password = $_POST['this_password'];
  if(!empty($user_name) && !empty($email) && !empty($password)) {
    $query = "insert into joueur (user_name, email, password) values ('$user_name', '$email', '$password')";
    mysqli_query($con,$query);
    // header("Location: ../index.php");
  } else {
    
  }
}
if (isset($_POST['signIn'])){
  $email = $_POST['this_emails'];
  $password = $_POST['this_passwords'];
  if( !empty($email) && !empty($password)) {
    $query = "select * from joueur where email = '$email'limit 1 ";
    $result = mysqli_query($con, $query);
    if($result) {
      if ($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);
        if($user_data ['passwrod'] === $passwords) {
          $_SESSION['user_id'] = $user_data['user_id'];
          $_SESSION['user_name'] = $user_data['user_name']; 
          echo $_SESSION['user_name'];  
          header("Location: ../index.php");
        }
      }
    }
  } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | TypinGame</title>
  <link rel="stylesheet" href="./signup.css">
  <link rel="shortcut icon" href="../images/gamepad-solid.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <header>
    <a href="../index.html" class="aa">
      <div class="icon"><i class="fa-solid fa-gamepad"></i></div>
      <h1 class="text">
        TYPINGAME
      </h1>
    </a>
    <a href="index.php"><i class="fa-regular fa-user fa-sm"></i></a>
  </header>


  <main style="height: 100%;">
    <div class="container" autocomplete="nope">
      <div class="register side">
        <form action="" method="post" class="form">
          <div class="title">register</div>
          <input type="text" id="usern" name="this_username" placeholder="username">
          <input type="email" id="eml" name="this_email" placeholder="email">
          <input type="password" id="pwd" name="this_password" placeholder="password">
          <button type="submit" class="signUp" name="signUp"><i class="fas fa-user-plus"></i> Sign Up</button>    
        </form>
      </div>
      <div class="login side">
        <form action="" method="post" class="form">
          <div class="title">login</div>
          <input type="email" id="eml" name="this_emails" placeholder="email">
          <input type="password" id="pwd" name="this_passwords" placeholder="password">
          <button type="submit" class="signIn" name="signIn"><i class="fas fa-sign-in-alt"></i> Sign In</button>
        </form>
      </div>
    </div>
  </main>
  <script src="./"></script>
</body>
</html>