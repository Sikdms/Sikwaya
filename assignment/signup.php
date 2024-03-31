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
     
     <div class="content">
        <h3>Sign Up</h3>
<form action="processes/signup_process.php" method="post">
    <label for="firstname">First name: </label><br>
    <input type="text" id="firstname" name="firstname" placeholder="first Name " autofocus required /><br>
   
   <label for="lastname">lastname: </label><br>
    <input type="text" id="lastname" name="lastname" placeholder="last Name" autofocus required /><br>

    <label for="email_address">Email Address: </label><br>
    <input type="email" id="email_address" name="email_address" placeholder="Email Address" /><br>
    
    <label for="gender">Gender : </label><br> 
   <select id="gender" required name="gender">
      <option value = "">--Select your gender--</option>
         <option value = "Masculine">M</option>
         <option value = "Feminine">F</option>
         </select><br/>

         <label for="password">Password: </label><br>
    <input type="password" id="password" name="password" placeholder="Password" /><br>

    <select name = "userType"  required>
   <option value = "">--Select User Type--</option>
   <option value = "admin">admin</option>
   <option value = "Client">Client</option>
   
   <!--<option value = "admin">admin</option>-->
   
   </select><br/><br/>
    
    <input type="submit" name="" value="submit" />
    

</form>
    </div>
      
    </div>
  </body>
</html>

