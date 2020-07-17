<!-- using the require function to insert head and meta  -->
<?php require "../templates/header.php";

// user variables
$name = "";
$email = "";
// error variables
$nameErr = "";
$emailErr = "";
// opening a database connection
$servername = "localhost";
$username = "username";
$password = "password";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // check name field is empty using the empty() php funtion
  if (empty($_POST["name"])){
    $nameErr = "Name is required";
  } else{
    $name = validate_input($_POST["name"]);
    $_SESSION["name"] = $name;
    // check name field for other characters apart from alphabets
    if (!preg_match("/^[a-zA-Z]*$/",$name)){
      $nameErr = "Only letters and white spaces allowed";
      $_SESSION["nameErr"] = $nameErr;
    }
  }
    // check email field is empty using the empty() php funtion
    if(empty($_POST["email"])){
      $emailErr = "Email is required";
    } else {
      $email = validate_input($_POST["email"]);
      $_SESSION["email"] = $email;
      // check if email address is well-formed
      if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
        $_SESSION["emailError"] = $emailErr;
      }
    }

}
// this function validates user entries in order to prevent malicious content from going through
function validate_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

   <?php require "../templates/footer.php";