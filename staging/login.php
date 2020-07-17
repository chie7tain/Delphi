<!-- using the require function to insert head and meta  -->
<?php include "../templates/header.php";
      include ("server.php");
?>
<title>Login</title>
<head>
<div class="notify-form-container">
<h2 class="form-heading">Sign in</h2>
<!-- form begining -->
    <form  method="POST" class="notify-form" action="login.php">

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

      <div class="btn-container">
        <input type="submit" value="Login" id="submit-btn">
      </div>
    </form>
    Not a User ? <a href="registrationform.php">Register</a>
</div>
  <?php require "../templates/footer.php";