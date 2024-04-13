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
          <a href="login.php">Sikwaya</a>
        </div>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="Services.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="center">
       
       <form action = "processes/signup_process.php" method = "POST" autocomplete = "off">
    <label>Username: <br/>
    <input type = "text" name = "username" placeholder = "username" autofocus  required><br/></label>
     
    <label>Password:<br/>
    <input type = "password" name = "password" placeholder = "Enter your password"  required><br/></label>
    
    <input type = "submit" name="Login" value = "Login"/><br/><br/>
    <a href="signup.php">Sign up</a>
    
    </form>
            <p class="form__text">
                <a class="form__link" href="index.php" id="HOME" >Go back HOME.</a>
            </p>
    </div>
   </form>
      
    </div>
  </body>
</html>
