<?php 
   session_start();
   include_once "php/config.php";
   if(!isset($_SESSION['unique_id'])){
     header("location: login.php");
   }
   
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Update Details</header>
     
      <form action="php/updateusers.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" 
            value="<?php echo $fname?>"  required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name"
            value="<?php echo $lname?>"   required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter your email" 
          value="<?php echo $email?>"  required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password"
          value="<?php echo $password?>"  required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg"
          value="<?php echo $img ?>"  required>
        </div>
        <div class="field button">
          <input type="submit" name="update" value="Update">
        </div>
      </form>
     
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
