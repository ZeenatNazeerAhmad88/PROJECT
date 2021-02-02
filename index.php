<!DOCTYPE html>
<html>
<head>
  <?php include 'link.php' 
  
  
  ?>
  
	<title>Final Project</title>

	<style type="text/css">
		body{
      background-image: url(images.jpg);
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 40px;
    }
    .regForm{
      width: 800px;
      background-color: rgb(0,0,0,0.2);
      margin: auto;
      color: #FFFFFF;
      padding: 10px 0px 10px 0px;
      text-align: center;
      border-radius: 15px 15px 0px 0px;


    }
    .main{
      background-color: rgb(0,0,0,0.2);
      width: 800px;
      margin: auto;
    }
		
	</style>
</head>
<body>
	<div class="regForm"><h1>Registeration Form</h1>
		
		<p>REGISTER HERE.</p>
	</div>
  <div class="main">
  	<form action="" method="POST">
  		<div class="col-md-4 mb-3">
    <label>First Name</label><br>
    <input type="text"  class="form-control" name="first_Name" id="firstName" placeholder="First Name..." >
  </div>
  <div class="col-md-4 mb-3">
    <label>Last Name</label><br>
    <input type="text"  class="form-control" name="last_Name" id="lastName"  placeholder="Last Name...">
  </div>
  <div class="col-md-4 mb-3">
    <label>Email</label><br>
    <input class="form-control" type="email" name="email" id="email" >
  </div>
  <div class="col-md-4 mb-3">
    <label>Password</label><br>
    <input class="form-control" type="password" name="pswd" id="password"  required="">
  </div>
  <div class="col-md-4 mb-3">
      <label>Age</label><br>
        <input class="form-control" type="number" name="age" id="age" required="">
    </div>
  <div class="col-md-4 mb-3">
      <label>Phone</label><br>
        <input class="form-control" type="number" name="number" id="phone" required="">
    </div>
  <div class="col-md-4 mb-3">
    <label for="homepage">Add your homepage:</label><br>
  <input class="form-control" type="url" id="homepage" name="homepage">
  
  <div>
    <label id="genderLabel">Gender</label><br>
    <input type="radio"  name="gender" id="male" value="male"  >Male
    <input type="radio" name="gender" id="female" value="female">Female
  </div>
  <div>
    <label>Date</label><br>
    <input type="Date"class="form-control" name="DOB" id="date">
    

  </div>
  <div>
       
         <label id="hobiLabel">Hobbies</label><br>
      <input type="checkbox" name="hobby" value="travling" id="travling">TRAVELING
      <input type="checkbox" name="hobby" value="driving" id="driving"  >DRIVING<br>
      <input type="checkbox" name="hobby" value="reading" id="reading" >READING
      <input type="checkbox" name="hobby" value="other" id="other" checked="">OTHER
   
    </div>
    <div class="col-md-4 mb-3">
      <label>Address</label><br>
      <textarea rows="3" cols="50" class="form-control" id="address" name="address" required=""></textarea>
    </div>
    <div  class="form-group">
      <label id="eduLabel">Education</label><br>
      <select class="form-control" name="education" id="education" required>
        <option value="?">Please select an option </option>
            <option value="masters" >MASTER</option>
        <option value="fsc">FA/FSC</option>
        <option value="matric">MATRIC</option>
        </select>

      
    </div>
    <button class="btn btn-primary btn-lg" name="submit" onclick="validateForm()">Register</button>
   <input class="btn btn-primary btn-lg" type="reset" value="Reset"></div>
     
    </div>
  	</form>
  </div>
  


<?php
include 'form.php';

if (isset($_POST['submit'])) {
  
  $firstName= $_POST['first_Name'];
  $lastName= $_POST['last_Name'];
  $email= $_POST['email'];
  $pswd= $_POST['pswd'];
  $age= $_POST['age'];
  $number= $_POST['number'];
  $homepage= $_POST['homepage'];
  $gender= $_POST['gender'];
  $DOB= $_POST['DOB'];
  $hobby= $_POST['hobby'];
  $address= $_POST['address'];
  $education= $_POST['education'];
    $code  = (rand(1000,10000));
  $sql= " INSERT INTO form(firstName, lastName, email, password, number, homepage, gender, date, hobby, address, education) VALUES ('$firstName','$lastName','$email','$pswd','$number','$homepage','$gender','$DOB','$hobby','$address','$education') ";

  
  if (mysqli_query($link,$sql)) {
      // echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }


   
 
 
}
$result=mysqli_query($link,  "SELECT * FROM form");
  /*print_r($result);
    exit();*/
    echo "<table >
    <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>password</th>
    
    <th>Phone</th>
    <th>Homepage</th>
    <th>Gender</th>
    <th>Date</th>
    <th>Hobbies</th>
    <th>Address</th>
    <th>Education</th>
    </tr>";

  while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['firstName'] . "</td>";
      echo "<td>" . $row['lastName'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
         echo "<td>" . $row['password'] . "</td>";
          echo "<td>" . $row['phone'] . "</td>";
          echo "<td>" . $row['homepage'] . "</td>";
          echo "<td>" . $row['gender'] . "</td>";
          echo "<td>" . $row['DOB'] . "</td>";
          echo "<td>" . $row['hobbies'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";  
            echo "<td>" . $row['education'] . "</td>";
              
                
      echo "</tr>";
    }
    echo "</table>";
 
// Close connection
mysqli_close($link);

?>



<script  type="text/javascript" src="script.js">
  

</script>
</body>
</html>