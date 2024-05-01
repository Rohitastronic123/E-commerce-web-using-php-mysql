<?php
include "conn.php";
include "registration.php";
?>
<?php include('errors.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="./images\myntra.png">   

    <title>Registration Form</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<div class="container">
  <div class="title">Registration</div>
  <form method="post">
    <div class="user__details">
      <div class="input__box">
        <span class="details">Full Name</span>
        <input type="text" placeholder="E.g: Rohit Bairwa" required>
      </div>
      <div class="input__box">
        <span class="details"  name="username">Username</span>
        <input type="text" placeholder="rohit123" required>
      </div>
      <div class="input__box">
        <span class="details"  name="email">Email</span>
        <input type="email" placeholder="rohit@gmail.com" required>
      </div>
      <div class="input__box">
        <span class="details">Phone Number</span>
        <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="9638527410" required>
      </div>
      <div class="input__box">
        <span class="details">Password</span>
        <input type="password" name="password_1" placeholder="********" required>
      </div>
      <div class="input__box">
        <span class="details">Confirm Password</span>
        <input type="password" name="password_2" placeholder="********" required>
      </div>

    </div>
    <div class="gender__details">
      <input type="radio" name="gender" id="dot-1">
      <input type="radio" name="gender" id="dot-2">
      <input type="radio" name="gender" id="dot-3">
      <span class="gender__title">Gender</span>
      <div class="category">
        <label for="dot-1">
          <span class="dot one"></span>
          <span>Male</span>
        </label>
        <label for="dot-2">
          <span class="dot two"></span>
          <span>Female</span>
        </label>
        <label for="dot-3">
          <span class="dot three"></span>
          <span>Prefer not to say</span>
        </label>
      </div>
    </div>
    <div class="button">
      <input type="submit" name="reg_user" value="Register">
    </div>
  </form>
</div>
</body>
</html>