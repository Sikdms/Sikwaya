
<?php
session_start();
require_once "config/dbConnect.php";
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home page </title>
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="admin.php">Sikwaya</a>
        </div>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="Services.php">Services</a></li>
          <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="center">
      <div class="title">Hi am sikwaya</div>
      <div class="sub_title">Welcome admin</div>
      <div class="btns">
        
        <button><a href="admin/manageAccount.php" style="text-decoration: none;"><span style="color: black;">View Users</span></a></button>

      </div>
    </div>
  </body>
</html>
