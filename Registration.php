<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
  </head>
  <body>
  	<center>
  		
	    <h1>Registration Form</h1>

	    <?php
	      $firstNameErr = $lastNameErr = $genderErr = $DoBErr = $religionErr = $presentAddressErr = $permanentAddressErr = $phoneErr = 
	      $emailErr = $PersonalWebsiteLinkErr = $userNameErr = $passwordErr =  "" ;

	      $firstName = ""; 
	      $lastName = "";
	      $gender = "";
	      $DoB ="";
          $religion ="";
		  $presentAddress = "";
		  $permanentAddress = "";
		  $phone = "";
		  $email = "";
		  $PersonalWebsiteLink = "";
		  $userName= "";
	      $password= "";
		

	      if($_SERVER["REQUEST_METHOD"] == "POST") 
	      {

	        if(empty($_POST['fname'])) {
	          $firstNameErr = "Please fill up the first name properly";
	        }
	        else {
	          $firstName = $_POST['fname'];
	        }

	        if(empty($_POST['lname'])) {
	          $lastNameErr = "Please fill up the last name properly";
	        }
	        else {
	          $lastName = $_POST['lname'];
	        }

	         if (empty($_POST['gender'])) {
	               $genderErr = "Gender is required"; 
	        } 

	        else { 
	          $gender = $_POST['gender']; 
	        }

	         if (empty($_POST['DoB'])) {
	               $DobErr = "DoB is required"; 
	        } 

	        else { 
	          $DoB = $_POST['DoB']; 
	        }

	         if (empty($_POST['religion'])) {
	               $religionErr = "Religion is required"; 
	        } 

	        else { 
	          $religion = $_POST['religion']; 
	        }
	        
	         if (empty($_POST['presentAddress'])) {
	               $presentAddressErr = " present Address is required"; 
	        } 

	        else { 
	          $presentAddress = $_POST['presentAddress']; 
	        }

	          if (empty($_POST['permanentAddress'])) {
	               $permanentAddressErr = " permanent Address is required"; 
	        } 

	        else {

	          $permanentAddress = $_POST['permanentAddress']; 
	        }


	        if(empty($_POST['phonel'])) {
	          $phoneErr = "Please enter your phoneNo";
	        }
	        else {
	          $phone = $_POST['phone'];
	      }


	        if(empty($_POST['email'])) {
	          $emailErr = "Please enter your email";
	        }
	        else {
	          $email = $_POST['email'];

	          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	            { 
	              $emailErr = "Invalid email format"; 
	            }
	        }

           if(empty($_POST['PersonalWebsiteLink'])) {
	          $PersonalWebsiteLinkErr = "Please enter your Personal Website Link";
	        }
	        else {
	          $PersonalWebsiteLink = $_POST['PersonalWebsiteLink'];

	        if(empty($_POST['uname'])) {
	          $userNameErr = "Please fill up the username properly";
	          }
	        else {
	          $userName = $_POST['uname'];
	        }

	        if(empty($_POST['password'])) {
	          $passwordErr = "Please fill up the password properly";
	        }
	        else {
	          $password = $_POST['password'];
	        }

	       }
	      }

	    ?>

	    <form action="databaseInsertion.php" method="POST">
	      <fieldset>
	        <legend>Basic Information: </legend>

	        <label for="fname">FirstName:</label>
	        <input type="text" name="fname" id="fname" value="<?php echo $firstName;?>">
	        <br>
	        <p style="color:red"><?php echo $firstNameErr; ?></p>

	        <label for="lname">LastName:</label>
	        <input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
	        <br>
	        <p style="color:red"><?php echo $lastNameErr; ?></p>

	        <label for="gender">Choose Gender:</label>

	        <input type="radio" name="gender" 
	        <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male 

	        <input type="radio" name="gender" 
	        <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female 

	        <input type="radio" name="gender" 
	        <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
	        <p style="color:red"><?php echo $genderErr; ?></p>
            
            <label for="doB">DoB:</label>
	        <input type="date" id="doB" name="doB" value="<?php echo $DoB;?>">
	        <br>
	        <p style="color:red"><?php echo $DoBErr; ?></p>

	        <label for="religion">Religion:</label>
	        <input type="dropdown" id="religion" name="religion" value="<?php echo $religion;?>">
	        <br>
	        <p style="color:red"><?php echo $religionErr; ?></p>


	      </fieldset>
	      <br>

	       <fieldset>
		<legend> Contact Information </legend>
		 
        <label for="present adress">Present Adress:</label>
		<input type="textarea" id="present adress" name="present adress" value="<?php echo $presentAddress; ?>">
		<br>
		<p style="color:red"><?php echo $presentAddressErr; ?></p>

		<label for="permanent adress">Permanent Adress:</label>
		<input type="textarea" id="permanent adress" name="permanent adress" value="<?php echo $presentAddress; ?>">
		<br>
		<p style="color:red"><?php echo $permanentAddressErr; ?></p>
		

		<label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>">
        <br>
        <p style="color:red"><?php echo $phoneErr; ?></p>


	    <label for="email">Email:</label>
	    <input type="email" name="email" id="email" placeholder="...@gmail.com" value="<?php echo $email ?>">
	    <br>
	    <p style="color:red"><?php echo $emailErr; ?></p>

  
        
        <label for="personal website link">Website Link:</label>
        <input type="url" id="personal website link" name="personal website link" value="<?php echo $PersonalWebsiteLink; ?>">
        <br>
        <p style="color:red"><?php echo $PersonalWebsiteLinkErr; ?></p>
        

        </fieldset>
	     
	      <fieldset>

	        <legend>User Account Information: </legend>

	        <label for="uname">UserName:</label>
	        <input type="text" name="uname" id="uname" value="<?php echo $userName; ?>">
	        <br>
	        <p style="color:red"><?php echo $userNameErr; ?></p>

	        <label for="pass">Password:</label>
	        <input type="password" name="password" id="password" value="<?php echo $password; ?>">
	        <br>
	        <p style="color:red"><?php echo $passwordErr; ?></p>
	        

	      </fieldset>
			<br>

			<input type="submit" value="Submit">

			</form>
			<br>
		</center>

		<style>
			fieldset{
				width: 35%;
				margin: auto;
			}
		</style>

    </body>
</html>