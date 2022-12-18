<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="card">
    <section class="users">
     
      <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
       
        <div class="content">
          <?php 
            $user_id = $_GET['user_id'];
            $sql = mysqli_query($conn, "SELECT  `fname`, `lname`, `email`, `password`, `img` FROM users WHERE 
            user_id = $user_id");
             if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            
          ?>
          
      <div class="profile-image">
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
      </div>
      <div class="details">
          <h1><?php echo $row['fname']. " " . $row['lname'] ?></h1>
            <p>School Of God and Evil</p>
              <a class="icons" href="#"><i class="fa-brands fa-tiktok"></i></a>
              <a class="icons" href="#"><i class="fa-brands fa-instagram"></i></i></a>
              <a class="icons" href="#"><i class="fa fa-twitter"></i></a>
              <a class="icons" href="#"><i class="fa fa-linkedin"></i></a>
              <a class="icons" href="#"><i class="fa-brands fa-github"></i></a>
              <a class="icons" href="#"><i class="fa fa-facebook"></i></a>
            <h5><?php echo $row['email']; ?></h5>
            
      <a href='updateusers.php? user_id = $row[user_id]'  class="edit-icon">
      <!-- <a href="updateusers.php? user_id= <?php echo  $row['user_id'] ?>"  class="edit-icon"> -->
        <i class="fa-solid fa-pen-to-square"></i>
      </a>
      </div>
            
      <?php } ?>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
