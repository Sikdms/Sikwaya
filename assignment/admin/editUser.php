 <?php
	session_start();
	require_once "../config/dbConnect.php";
	
	?>
<?php
	if(isset($_GET["EditUser"])){
	$EditUser = mysqli_real_escape_string($dbConn, $_GET["EditUser"]);
	
	$res_tbl_users = $dbConn->query("SELECT * FROM `tbl_users`   WHERE userId = '$EditUser' LIMIT 1"); 
	$row_tbl_users = $res_tbl_users->fetch_assoc();
	
	}
 ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home page </title>
    <link rel="stylesheet" href="../css/style.css" />
    
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
      


    <form class="needs-validation" action = "../processes/signup_process.php" method = "POST" >
          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstname">First name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Update firstname" value="<?php print $row_tbl_users["firstname"];?>" required>
                <div class="invalid-feedback">
                
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastname">Last name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Update last name " value="<?php print $row_tbl_users["lastname"];?>" required>
                <div class="invalid-feedback">
                  
                </div>
              </div> 
			 
			  
            </div>

            <div class="invalid-feedback">
            <input type="hidden"  name = "userId" value="<?php print $row_tbl_users["userId"]; ?>" />
              </div>
            
			
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name = "update">Update <?php print $row_tbl_users["firstname"];?></span><?php print "&nbsp";?><span><?php  print $row_tbl_users ["lastname"];?></span></button>
			
			
			
          </form>


      
    </div>
  </body>
</html>
