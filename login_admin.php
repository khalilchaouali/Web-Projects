<?php
   include("config.php");
   session_start();
   $error="false";
  try{
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
  $sql = "SELECT id_login FROM login WHERE username = '$myusername' and password= '$mypassword'";
      
       
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_id']=$row["id_admin"];
         // echo $row["id_user"];
         $_SESSION['login_admin'] = $myusername;
          header("location:acceuilTest.php");
        // echo $myusername;
      }else {
         $error = "Your Login Name or Password is invalid";
         $_SESSION["login_error"]="true";
         header("location: signin.php");

      }
   }
 catch(PDOException $ex)
        {
            echo  $ex->getMessage();    
        }
    
?>