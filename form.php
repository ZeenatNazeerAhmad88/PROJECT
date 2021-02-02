
<?php
error_reporting(0);
$username ="root";
$password =" ";
$server ="localhost";
$db = "registration";
$sql = "SELECT * FROM form";
$link = mysqli_connect("localhost", "root", "", "registration");
 // Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

}else{?> <script>
	alert("connection successful");
</script>
	<?php
	
}


// define variables and set to empty values
$first_NameErr = $last_NameErr= $emailErr = $pswdErr = $numberErr = $homepageErr =$DOBErr = $hobbyErr = $ageErr = $genderErr = $educationErr = "";
$first_Name = $last_Name= $email = $pswd = $number = $homepage =$DOB = $hobby =   $address = $age = $gender = $education = "";
// Given password
$pswd = 'user-input-pass';

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $pswd);
$lowercase = preg_match('@[a-z]@', $pswd);
$number    = preg_match('@[0-9]@', $pswd);
$specialChars = preg_match('@[^\w]@', $pswd);

$number = '000-0000-0000';
// Validate number
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $number)) {
  $numberErr = "Invalid number";
}else{
    echo 'Valid phone number';
}

 /*if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
     echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
 }else{
     echo 'Strong password.';
 }*/
// validate first name
  if (empty($_POST["first_Name"])) {
    $first_NameErr = "Name is required";
  } else {
    $first_Name = test_input($_POST["first_Name"]);
    // check if first_Name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$first_Name)) {
      $first_NameErr = "Only letters and white space allowed";
    }
  }
  // validate last name
  if (empty($_POST["last_Name"])) {
    $last_NameErr = "Name is required";
  } else {
    $last_Name = test_input($_POST["last_Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$last_Name)) {
      $last_NameErr = "Only letters and white space allowed";
    }
  }
  
// validate Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    // validate homepage
  /*if (empty($_POST["homepage"])) {
    $homepage = "";
  } else {
    $homepage = test_input($_POST["homepage"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$$homepage)) {
      $homepageErr = "Invalid URL";
    }
  }*/
  // validate address

  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }
  // validate gender

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  // validate education
  if (empty($_POST["education"])) {
    $educationErr = "Education is required";
  } else {
    $education = test_input($_POST["education"]);
  }
  // Validate Hobby
  if (empty($_POST["hobby"])) {
    $hobbyErr = "Hobby is required";
  } else {
    $hobby = test_input($_POST["hobby"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}







?>