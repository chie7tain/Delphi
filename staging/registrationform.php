<!-- using the require function to insert head and meta  -->

<?php

include "../templates/header.php";
      include ("server.php");
?>
<title>Registration form</title>
<head>
<div class="notify-form-container">
<h2 class="form-heading">Register</h2>
<!-- form begining -->
    <form  method="POST" class="notify-form" action="registrationform.php">
    <?php include ("errors.php") ?>
    <!-- username -->
      <div class="input-container">
        <input type="text" id="username" name="username" autocomplete="off" required value="">
        <label for="username" class="email-label">
          <span class="content-name">Enter your name</span>
        </label>
        <span class="error"></span>
      </div>
      <!-- end of username -->
      <!-- =================== -->
      <!-- email -->
      <div class="input-container">
        <input type="email" id="email" name="email" autocomplete="off" required value="">
        <label for="email" class="email-label">
          <span class="content-name">Enter your email address</span>
        </label>
        <span class="error">* <?php;?></span>
      </div>
      <!-- end of email -->
      <!-- ==================== -->
      <!-- password -->
      <div class="input-container">
        <input type="password" id="password" name="password" autocomplete="off" required >
        <label for="email" class="email-label">
          <span class="content-name">Enter Password</span>
        </label>
        <span class="error">* <?php ;?></span>
      </div>
      <!-- end of password -->
      <!-- ================== -->
      <!-- confirm password -->
      <div class="input-container">
        <input type="password" id="confirmPassword" name="confirmPassword" autocomplete="off" required value="">
        <label for="confirmPassword" class="email-label">
          <span class="content-name">Confirm Password</span>
        </label>
        <span class="error">* <?php ;?></span>
      </div>
      <!-- end of confirm password -->
      <div class="btn-container">
        <input type="submit" value="Register" id="submit-btn">
      </div>
    </form>
  <p class="redirect">Already a user ? <a href="login.php">Login</a>
  </div>
  <?php require "../templates/footer.php";