<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Pershendetje<span>!</span></h3>
      <h1>Mire se erdhet<span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Kjo eshte nje faqe e admin-it</p>
      <a href="hangman.php" class ="btn">Hangman</a>
      <a href="create.php" class="btn">Krijo nje llogari tjeter</a> 
      <a href="view.php" class="btn">Perpuno te dhenat</a>  
      <a href="login_form.php" class="btn">Kyquni</a>
      <a href="register_form.php" class="btn">Regjistrohuni</a>
      <a href="logout.php" class="btn">Dilni</a>
   </div>

</div>

</body>
</html>