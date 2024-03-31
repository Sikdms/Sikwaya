
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
          <a href="index.html">Sikwaya</a>
        </div>
        <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="Services.html">Services</a></li>
          <li><a href="feedback.html">Feedback</a></li>
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="center">
      <div class="title">Hi am sikwaya</div>
      <div class="sub_title">Welcome to my page!</div>
      <div class="btns">
        <button><a class="nav-link" href="admin/editUser.php">
                  <span data-feather="users"></span>edituser</a></button>
        
        <button><a href="admin/manageAccount.php" style="text-decoration: none;"><span style="color: black;">View Users</span></a></button>

      </div>
    </div>
  </body>
</html>
