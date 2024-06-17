<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assest/css/main.css" />
  </head>
  <body>
    <form method="post">
    <div class="container">
      <div class="row">
        <div class="login">
          <div class="tittle">
            <h1>Student Login</h1>
          </div>

          <div class="pro">
            <img src="assest/img/Login/middle.png" alt="" />

            <div class="input-field">
              <div class="email">
              <input type="text" placeholder="Username" class="input-email" name="username" />
                <img src="assest/img/Login/person.svg" alt="person" />
              </div>

              <div class="email">  
               <input type="password" placeholder="Password"  name="password" />
                <img src="assest/img/login/lock.svg" alt="person" />
              </div>

              <div class="submit">
                <input type="submit" value="Login" name="BTN"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
<?php
  include("db.php");

  if (isset($_POST["BTN"])) {
    $uname = $_POST["username"];
    $password = $_POST["password"];

    $q1 = "SELECT * FROM user WHERE User_Name='$uname' AND password='$password'";
    $result = mysqli_query($con, $q1);
    
    if (mysqli_num_rows($result) === 1) {
      header("Location: stddashboard.php");
    } else {
      echo "<script>alert('Invalid username or password');</script>";
    }
  }
  ?>

  </body>
</html>
