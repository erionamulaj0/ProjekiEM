<?php 

include "crud/config.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];

        $user_id = $_POST['user_id'];

        $lastname = $_POST['lastname'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $gender = $_POST['gender']; 

        $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Te dhenat u ruajten me sukses";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $password  = $row['password'];

            $gender = $row['gender'];

            $id = $row['id'];

        } 

    ?>
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

        <h2>Formulari i përditësimit të përdoruesit</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Informatat personale: </legend>

            Emri:<br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Mbiemri:<br>

            <input type="text" name="lastname" value="<?php echo $lastname; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Fjalekalimi:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br>

            Gjinia:<br>

            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Mashkull

            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Femer

            <br><br>
            <button input type="submit" value="Update" name="update">Përditëso</button>
           
          </fieldset>

        </form> 
        <a href="hangman.php" class ="btn">Hangman</a>
        <a href="create.php" class="btn">Krijo nje llogari tjeter</a> 
        <a href="view.php" class="btn">Perpuno te dhenat</a>  
        <a href="login_form.php" class="btn">Kyquni</a>
        <a href="register_form.php" class="btn">Regjistrohuni</a>
        <a href="logout.php" class="btn">Dilni</a>

        </body>

        </html> 

    <?php
    if(isset($_POST['update'])){
        $link='view.php?name='.$_POST['name'];
        header('location:'.$link);

    }} else{ 

        header('Location: view.php');

    } 

}

?> 