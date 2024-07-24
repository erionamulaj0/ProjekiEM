<?php 

include "crud/config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "Te dhenat e reja u krijuan me sukses.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 
    if(isset($_POST['submit'])){
      $link='view.php?name='.$_POST['name'];
      header('location:'.$link);

  }}

?>

<!DOCTYPE html>

<html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   box-sizing: border-box;
   text-decoration: none;
   background-color:#DDBEA9;   
}
  h2{
    color:#B7B7A4;
    font-size: 35px;
    text-align:center;
  }
  legend{
    font-size:30px;
    color: #61331a;
  }
  fieldset{
    box-shadow: 0 15px 40px 10px rgba(227, 5, 5, 0.1);
    background-attachment: fixed;
    background-color:#DDBEA9;
    color: #61331a;
    border-radius:10px;
    border: 4px solid #a1948a;
    font-weight:bold;
    font-size:25px;
  }

  fieldset input{
    border-radius:7px;
    border: 2px solid #a1948a;
    background-color:#fbd0d9;

  }

  fieldset button{
    background-color:#B7B7A4;
    color:#61331a;
    border-radius:7px;
    border: 2px solid #a1948a;
    font-weight:bold;
    font-size:20px;
  }

.btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 15px;
   font-weight:bold;
   background: #b7b7a4;
   color:#61331a;
   margin:0 5px;
   text-transform: capitalize;
   border-radius:12px;
   border:1px solid #a1948a
}
  

  </style>

<body>
<h2>Formulari per regjistrim</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Informatat personale:</legend>

    Emri:<br>

    <input type="text" name="firstname">

    <br>

    Mbiemri:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gjinia:<br>

    <input type="radio" name="gender" value="Male">Mashkull

    <input type="radio" name="gender" value="Female">Femer

    <br><br>
    <button input type="submit" name="submit" value="submit"> Paraqit </button>

  </fieldset>
      <a href="hangman.php" class ="btn">Hangman</a>
      <a href="create.php" class="btn">Krijo nje llogari tjeter</a> 
      <a href="view.php" class="btn">Perpuno te dhenat</a>  
      <a href="login_form.php" class="btn">Kyquni</a>
      <a href="register_form.php" class="btn">Regjistrohuni</a>
      <a href="logout.php" class="btn">Dilni</a>    

</div>

</body>

</html>