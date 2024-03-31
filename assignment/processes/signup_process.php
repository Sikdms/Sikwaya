<?php
    require_once "../config/dbConnect.php";

    $firstname = mysqli_real_escape_string($dbConn, ucwords(strtolower($_POST["firstname"])));
    $lastname = mysqli_real_escape_string($dbConn, ucwords(strtolower($_POST["lastname"])));
    $email = mysqli_real_escape_string($dbConn, strtolower($_POST["email"]));
    $gender = mysqli_real_escape_string($dbConn, $_POST["gender"]);
    $password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    $userType = mysqli_real_escape_string($dbConn, $_POST["userType"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die('Invalid email');
    }

    $email_exist = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $email_exist_res = $dbConn->query($email_exist);
    if($email_exist_res->num_rows > 0){
        die('Email aleady exist'); 
    }

    $hash_password = PASSWORD_HASH($pass, PASSWORD_DEFAULT);
    $insert_qry = "INSERT INTO users(firstname,lastname, email, gender, password)VALUES('$firstname','$lastname', '$email', '$gender', '$hash_password','$userType', UNIX_TIMESTAMP())";

    if($dbConn->query($insert_qry) === TRUE){
        header("Location: ../login.php");
    }else{
        print "Process Failed" . $insert_qry . "<br>" . $dbConn->error;
    }



 if(isset($_POST["login"])){
    $entered_email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $entered_password = mysqli_real_escape_string($dbConn, $_POST["password"]);
    
    $spot_email = "SELECT*FROM tbl_users WHERE email = '$entered_email' LIMIT 1";
    
    $uName_res = $dbConn->query($spot_email);
    
    if($uName_res->num_rows > 0){
        $_SESSION["control"] = $uName_res->fetch_assoc();
        
        $stored_password = $_SESSION["control"]["password"];
        $userType = $_SESSION["control"]["userType"];
        
        
        if(password_verify($entered_password, $stored_password)){
    // die("$userType");
            if($userType == "Client"){
            header("Location: ../Client.php");
            exit();
            
        }elseif($userType == "admin"){  
            header("Location: ../admin.php");
            exit();

        
        }else{
            
            header("Location: ../login.php");
            exit();
        
        }
    
    

    }

    }


}
    
    
    
    //logout process
    if(isset($_GET["logout"])){
        unset($_SESSION["control"]);
            header("Location: ../login.php");      
            exit();
        
    }


// Delete user process
    
    if(isset($_GET["DeleteUser"])){
    $DeleteUser = mysqli_real_escape_string($dbConn, $_GET["DeleteUser"]);
    
    $DeleteUser_SQL = "DELETE FROM tbl_users WHERE userId = '$DeleteUser' LIMIT 1";
     
    $uDelete_res = $dbConn->query($DeleteUser_SQL);
    if($DeleteUser_SQL === TRUE){
        header("Location: ../admin/manageAccount.php");
            exit();
        
        }else{
        print $dbConn->error;
        header("Location: ../admin/manageAccount.php");
            exit();
    }
}




// Delete user process
    
    if(isset($_GET["DeleteUser"])){
    $DeleteUser = mysqli_real_escape_string($dbConn, $_GET["DeleteUser"]);
    
    $DeleteUser_SQL = "DELETE FROM tbl_users WHERE userId = '$DeleteUser' LIMIT 1";
     
    $uDelete_res = $dbConn->query($DeleteUser_SQL);
    if($DeleteUser_SQL === TRUE){
        header("Location: ../admin/manageAccount.php");
            exit();
        
        }else{
        print $dbConn->error;
        header("Location: ../admin/manageAccount.php");
            exit();
    }
}

  //Update user process


if (isset($_POST["update"])){
    $firstname = mysqli_real_escape_string($dbConn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($dbConn, $_POST["lastname"]);
    $gender = mysqli_real_escape_string($dbConn, $_POST["gender"]); 
    $email = mysqli_real_escape_string($dbConn, $_POST["email"]);
    $userId = mysqli_real_escape_string($dbConn, $_POST["userId"]);
    

    $user_update= "UPDATE tbl_users SET firstname ='$firstname',lastname ='$lastname',dob ='$dob',gender ='$gender',email ='$email' WHERE userId='$userId' LIMIT 1";
    
    
    if($dbConn->query($user_update) === TRUE){
        header("Location: ../admin/manageAccount.php");
        exit();
    }
    else{
        print $dbConn->error;
        
    
    }
    
}

 
?>


