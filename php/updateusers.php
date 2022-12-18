<?php
include_once "php/config.php";

// $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = $user_id");
    // $user_id = $_GET['user_id'];
    // $sql="SELECT * FROM users WHERE user_id = $user_id";
    // $result = mysqli_query($conn,$sql) or die ( mysqli_error());
    // $row = mysqli_fetch_assoc($result);
    
    // $fname = $row['fname'];
    // $lname = $row['lname'];
    // $email = $row['email'];
    // $password = $row['password'];
    // $img = $row['img'];

// while($res = mysqli_fetch_array($result))
// {
// 	$user_id = $_GET['updateuser'];
//     $fname = $row['fname'];
//     $lname = $row['lname'];
//     $email = $row['email'];
//     $password = $row['password'];
//     $img = $row['img'];
// }

   $user_id = $_GET['user_id'];
   $sql="SELECT * FROM users WHERE user_id = $user_id";
   $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result))
    {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $password = $row['password'];
        $img = $row['img'];
    }




if (isset($_POST['update'])) {
    $user_id = $_GET['user_id'];
    $fname   = $conn->real_escape_string($_POST['fname']);
    $lname   = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $img    = $conn->real_escape_string($_POST['img']);

    $sql = "UPDATE `users` SET user_id='$user_id', fname='$fname',
    lname='$lname,email='$email',password='$password',img='$img' WHERE user_id = $user_id";
    $result = mysqli_query($conn,$sql);
    if ($result){
        echo '<script>alert("Your details is updated successfully")</script>';
        header('location: userdetails.php');
    }else {
        die('Connection Failed : '.$con->connect_error);
    }
}
?>