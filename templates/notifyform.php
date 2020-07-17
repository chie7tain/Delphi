<!-- using the require function to insert head and meta  -->
<?php
      include ("server.php");
?>
<title>Notify form</title>
<head>
<div class="notify-form-container">
<h2 class="form-heading">Get Notified on app release!</h2>
<!-- form begining -->
    <form  method="POST" class="notify-form" action="notifyform.php">
    <!-- username -->
      <div class="input-container">
        <input type="text" id="firstname" name="name" autocomplete="off" required value="">
        <label for="firstname" class="email-label">
          <span class="content-name">Enter your name</span>
        </label>
        <span class="error">* <?php ;?></span>
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

      <div class="btn-container">
        <input type="submit" value="Submit" id="submit-btn">
      </div>
    </form>
</div>
  <?php require "../templates/footer.php";