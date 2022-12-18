<?php 
session_start();
include_once ("config.php");
if (!isset($_SESSION['unique_id'])) {
    header("Location: loginform.php");
    
}

  if (isset($_GET['deleteuser_id'])) {
      $user_id=$_GET['deleteuser_id'];
      $sql = "DELETE FROM `users` WHERE user_id = $user_id";
      $result = mysqli_query($conn,$sql);
      if ($result) {
        //   echo '<script>alert("Details is deleted successfully")</script>';
          header('location: users.php');
      }
      else{
        die('Connection Failed : '.$conn->connect_error);
      }
  }
?>