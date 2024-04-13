<?php      
      session_start();
      require_once "config/dbConnect.php";
?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clientpage </title>
    <link rel="stylesheet" href="css/style_contact.css" />
    
  </head>
  <body>
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="Client.php">Sikwaya</a>
        </div>
        <ul>
          <li><a href="index.php">home</a></li>
          <li><a href="Services.php">Services</a></li>
          <li><a href="about.php">about</a></li>
          <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="center">
     
      <form class="cf">
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="name">
    <input type="email" id="input-email" placeholder="Email">
    <input type="text" id="input-subject" placeholder="Subject">
  </div>
  </br>
   <select name = "type of message"  required>
   <option value = "">--type of message--</option>
   <option value ="" >giving you a job</option>
   <option value = "">request information </option>
   <option value=""> request appointnment</option>
</select>
   
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message" cols="20" rows="3" style="width:507px; height: 117px;"></textarea>
  </div>
    <div class="btns">
  <input type="submit" value="Submit" id="input-submit">

      </div>
    </div>
  </body>
</html>
