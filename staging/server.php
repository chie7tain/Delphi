
<?php

// this starts the session
session_start();

$username = "";
$email = "";


// this line creates an errors array to store errors
$errors = array();

// this line of php connects to the siteUsers database
$db = mysqli_connect("localhost","root","","siteusers") or die("could not connect to database");
print_r($db);

// register users
$username = mysqli_real_escape_string($db, $_POST["username"]);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);

// form validation
// if ($_SERVER["REQUEST_METHOD"] == "POST"){
  // check name field is empty using the empty() php funtion
  if (empty($_POST["username"])){
    array_push($errors, "Username is Required");
  }
  // else{
  //   $username = validate_input($_POST["username"]);
    // check name field for other characters apart from alphabets
    // function checkUsername($username){
    //   if (!preg_match("/^[a-zA-Z]*$/",$username)){
    //   array_push($errors,"Only letters and white spaces allowed");
    // }
    // }
  // }
    // check email field is empty using the empty() php funtion
    if(empty($_POST["email"])){
      array_push($errors,"Email is required");
    }
    // else {
    //   $email = validate_input($_POST["email"]);
      // check if email address is well-formed
      // if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
      //   array_push($errors,"Email address not properly formed");
      // }
    // }
    if(empty($_POST["password"])){
      array_push($errors,"Password is required");
    }
    // else {
    //   $password = validate_input($_POST["password"]);
    // }
    if($password != $confirmPassword){
      array_push($errors,"Passwords do not match");
    }

  // check db for existing user with same username
  $user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
  $result = mysqli_query($db,$user_check_query);
  $user = mysqli_fetch_assoc($result);

  if($user){
    if($user["username"] === $username){
      array_push($errors,"Username already exists");
    }
    if($email["email"] === $email){
      array_push($errors,"This Email is already associated with a user");
    }
  }
  // register the user if no errors
  if(count($errors) === 0){
    // hashing password for security using php md5 hashing function
    $hashPassword = md5($password); //this would encrypt the password
    $query = "INSERT INTO user (username,email,password) VALUES('$username',$email,$hashPassword')";
    mysqli_query($db,$query);
    $_SESSION["username"] = $username;
    $_SESSION["success"] = "You are now logged in";
    header("location:dashboard.php");
  }


// }
// this function validates user entries in order to prevent malicious content from going through
function validate_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
