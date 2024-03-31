<?php      
      session_start();
      require_once "../config/dbConnect.php";
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
          <li><a href="../about.html">About</a></li>
          <li><a href="../Services.html">Services</a></li>
          <li><a href="../contact.html">Contact</a></li>
          <li><a href="../feedback.html">Feedback</a></li>
        </ul>
      </div>
    </nav>
    <div class="img"></div>
    <div class="center">
      


  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">First name</th>
    <th scope="col">Last name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">User Type</th> 
    <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 
  $cn=0;
  $res_tbl_users = $dbConn->query("SELECT * FROM `tbl_users` WHERE userType <> 'admin'");
  while($row_tbl_users = $res_tbl_users->fetch_assoc()){ $cn++;?>
    <tr>
      <th scope="row"><?php print $cn; ?></th>
      <td><?php print $row_tbl_users["userId"];?></td>
      <td><?php print $row_tbl_users["firstname"];?></td>
      <td><?php print $row_tbl_users["lastname"];?></td>
      <td><?php print $row_tbl_users["gender"];?></td>
      <td><?php print $row_tbl_users["email"];?></td>
      <td><?php print $row_tbl_users["userType"];?></td>
    
     <td>  
        <button><a href="editUser.php?EditUser=<?php print $row_tbl_users["userId"];?>">Edit</a> </button>
        <button><a href="../processes/signup_process.php?DeleteUser=<?php print $row_tbl_users["userId"];?>">Delete</a></button>
        
        

        </td>
    </tr>
      
  <?php } ?>
    
   
  </tbody>
</table>



      
    </div>
  </body>
</html>
