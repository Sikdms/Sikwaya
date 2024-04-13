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
          <a href="signup.php">Sikwaya</a>
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
     
     <div class="content">
        <h3>Sign Up</h3>

    <form action= "processes/signup_process.php" method= "POST" autocomplete="off", class="register" style="line-height: 30px;">
      <div class="logins">
      
      <div class="header">
   
   </div>
    
   <label>First name: <br/>
   <input type = "text" class="register-input" name = "firstname" placeholder = "Enter your firstname" autofocus  /><br/></label>
   <label>Last name: <br/>
   <input type = "text" class="register-input" name = "lastname" placeholder = "Enter your last name" /><br/></label>
   <label>Other name: <br/>
   <input type = "text" class="register-input" name = "othername" placeholder = "Enter your othername" /><br/><br/></label>
   <select name = "gender" required>
         <option value = "">--Select your gender--</option>
         <option value = "Masculine">M</option>
         <option value = "Feminine">F</option>
         </select><br/>
   <label>Date of birth: <br/>
   <input type = "date"class="register-input" name = "dob" placeholder = "Enter your dob" required><br/></label>     
   <label>User name:<br/>
   <input type = "text" class="register-input" name = "username" placeholder = "Enter your user name"  required><br/></label>
   <label>Email address:<br/>
   <input type = "email" class="register-input" name = "email" placeholder = "Enter your email"  required><br/></label>
   <label>Password:<br/>
   <input type = "password" class="register-input" name = "password" placeholder = "Enter your password"  required><br/></label>
   <label>Confirm password:<br/>
   <input type = "password"  class="register-input" name = "passwordconf" placeholder = "Confirm password" required><br/></label>
   
   <select name = "userType"  required>
   <option value = "">--Select User Type--</option>
   <option value = "farmer">Farmer</option>
   <option value = "Client">Client</option>
   
   <!--<option value = "admin">admin</option>-->
   
   </select><br/><br/>
   
   <input type = "submit" name = "signup" value="Sign Up"><br/><br/>
   
   </form>

    </div>
      
    </div>
  </body>
</html>

