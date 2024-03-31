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
          <li><a href="contact.html">Contact</a></li>
          <li><a href="feedback.html">Feedback</a></li>
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="center">
      <form action = "processes/signup_process.php" method = "POST" autocomplete = "off">
    <label>email: <br/>
    <input type = "text" name = "email" placeholder = "email" autofocus  required><br/></label>
     
    <label>Password:<br/>
    <input type = "password" name = "password" placeholder = "Enter your password"  required><br/></label>
    
    <input type = "submit" name="Login" value = "Login"/><br/><br/>
    <a href="signup.php">Sign up</a>
    
    </form>
      
    </div>
  </body>
</html>
