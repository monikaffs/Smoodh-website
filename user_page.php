<?php

$conn = mysqli_connect('localhost','root','','user_db');

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

<style>

.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 30px;
   color:#333;
}

.container .content h3 span{
   background: crimson;
   color:#fff;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color:#333;
}

.container .content h1 span{
   color:crimson;
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: crimson;
}
footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px 0;
}


</style>
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>user</span></h3>
      <h1>Welcome <span>
      <?php 
      echo $_SESSION['user_name'] 
      ?>
      </span></h1>
      <p>This is an user page</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="register_form.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>

<footer>
    <p>&copy; 2024 Parle Agro SMOODH. All rights reserved.</p>
  </footer>

</body>
</html>