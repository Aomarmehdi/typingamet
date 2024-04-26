<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TypinGame</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="./images/gamepad-solid.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
  </head>
  <body>
    
    <header>
      <a href="./index.php" class="aa">
        <div class="icon"><i class="fa-solid fa-gamepad"></i></div>
        <h1 class="text">TYPINGAME</h1>
      </a>
      <div class="username-db">
        <a href="./signup/index.php"><i class="fa-regular fa-user fa-sm"></i></a>
          <a href="./statistics.php" id="stats">
            <?php
              $r = $_SESSION['user_name']; echo $r;
            ?> 
          </a>
      </div>
    </header>
    
    <div id="modes">
      <div class="row">
        <div class="mode">
          <div class="textButton first">random</div>
          <div class="textButton">@punctuation</div>
          <div class="textButton" onclick="(a==false) ? a = true: a = false;
          a == false ? textColorO() :textColorY(  );
          newGame();
          // a = localStorage.getItem('a') === 'false' ? a = false : a = true
          "
           id = "numbers">numbers</div>
        </div>
      </div>
    </div>

    <div id="testConfig">
      <div class="row">
        <div class="time">
          <div class="textButton" timeconfig="15"><span>15</span></div>
          <div class="textButton" timeconfig="30"><span>30</span></div>
          <div class="textButton" timeconfig="45"><span>45</span></div>
          <div class="textButton last" timeconfig="60"><span>60</span></div>
        </div>
      </div>
    </div>

    <main>
      <div id="header">
        <div id="info">30</div>
      </div>
      <div id="game" tabindex="0">
        <div id="words"></div>
        <div id="cursor"></div>
        <!-- <div id="focus-error">Click here to focus</div> -->
      </div>
      <div id="buttons">
        <button id="newGameBtn"><i class="fa-solid fa-arrow-rotate-right fa-lg"></i></button>
      </div>
    </main>

    <div class="content">
      <ul class="result-details">
        <li class="temps">
          <p>Time Left:</p>
          <span>60s</span>
        </li>
        <li class="mistake">
          <p>Mistakes:</p>
          <span>0</span>
        </li>
        <li id="wpm">
          <p>WPM:</p>
          <span>0</span>
        </li>
        <li class="cpm">
          <p>CPM:</p>
          <span>0</span>
        </li>
      </ul>
    </div>

    <script src="./js/paragraph.js"></script>
    <script src=" ./js/script.js"></script>
  </body>
</html>
