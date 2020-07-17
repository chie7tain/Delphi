
<?php
session_start();
require "../templates/header.php";
if(isset($_SESSION["username"])){
  $_SESSION["msg"] = "You must log in first to view this page";
  header("location: login.php");
}
if(isset($_GET["logout"])){
  session_destroy();
  unset($_SESSION["username"]);
  header("location:login.php");
}
include "../templates/header.php";
?>
<title>dashboard</title>
</head>
<body>

  <h1 class="header">Welcome to the champions lounge</h1>
  <?php
  if(isset($_SESSION["success"])) :?>
  <div>
    <h3>
    <?php
      echo $_SESSION["success"];
      unset($_SESSION["success"]);
      ?>
    </h3>
  </div>
<?php endif ?>
<!-- this line checks if the user has logged in and if so prints the following lines -->
<?php if(isset($_SESSION["username"])) : ?>
  <h3> Welcome
  <strong><?php echo $_SESSION["username"]; ?></strong>
  </h3>
  <button><a href="dashboard.php?logout='1'"></a></button>
  <?php endif ?>

