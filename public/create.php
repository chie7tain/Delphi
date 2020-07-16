<?php include "./templates/header.php";?>
<h2>Please fill this form</h2>

<form action="" method="post" class="new-user-form">
  <label for="firstname" class="input-label">First Name:</label>
  <input type="text" name="firstName" class="input" id="firstname">
  <label for="lastname" class="input-label">Last Name:</label>
  <input type="text" name="lastName" class="input" id="lastname">
  <label for="email" class="input-label">Email Address:</label>
  <input type="email" name="email" class="input" id="email">
  <label for="age" class="input-label">Age:</label>
  <input type="text" name="age" class="input" id="age">
  <label for="location" class="input-label">Location:</label>
  <input type="text" name="location" class="input" id="location">
  <input id="submit-btn" type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Back to Home</a>
<?php include "./templates/header.php";?>