<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])&&
	isset($_POST['email']) && isset($_POST['phone'])&& isset($_POST['gen'])
	&& isset($_POST['emp'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);
	$gen = validate($_POST['gen']);
	$empp = validate($_POST['emp']);
	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=email is required&$user_data");
	    exit();
	}
	else if(empty($phone)){
        header("Location: signup.php?error=mobile number is required&$user_data");
	    exit();
	}

	else if(empty($gen)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}
	else if(empty($empp)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM admin WHERE user_name='$uname' AND email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username or email is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO admin(user_name, password, name,email,mobile,gender,field) VALUES('$uname', '$pass', '$name','$email','$phone','$gen','$empp')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			 
			
			
           	 header("Location: signup.php?success=Your account has been created successfully");
	       exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}
