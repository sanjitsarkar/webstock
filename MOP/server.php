<?php 
	session_start();

	// variable declaration
	$email = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'hyndex');

	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
$query = "SELECT * FROM acc WHERE email='$email'";
			$results = mysqli_query($db, $query);


  	if (mysqli_num_rows($result) > 0) {
  	 
  	  array_push($errors, "Sorry You Are Already Registered");	
  	}
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO acc (email, pass) 
					  VALUES('$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 
	// ... 
	
	// LOGIN USER
	if (isset($_POST['submit'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pass = mysqli_real_escape_string($db, $_POST['pass']);

		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($pass)) {
			array_push($errors, "pass is required");
		}

		if (count($errors) == 0) {
			
			$pass = md5($pass);
			$query = "SELECT * FROM acc WHERE email='$email' AND pass='$pass'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong email/pass combination");
			}
		}
	}


//account2
	if (isset($_POST['reg_user2'])) {
		// receive all input values from the form
		$email1 = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($email1)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
$query = "SELECT * FROM acc2 WHERE email='$email1'";
			$results = mysqli_query($db, $query);


  	if (mysqli_num_rows($results) > 0) {
  	 
  	  array_push($errors, "Sorry You Are Already Registered");	
  	}
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO acc2 (email, pass) 
					  VALUES('$email1', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email1'] = $email1;
			$_SESSION['success'] = "You are now logged in";
			header('location:index1.php');
		}

	}

	// ... 
	// ... 
	
	// LOGIN USER
	if (isset($_POST['submit2'])) {
		$email1 = mysqli_real_escape_string($db, $_POST['email']);
		$pass = mysqli_real_escape_string($db, $_POST['pass']);

		if (empty($email1)) {
			array_push($errors, "email is required");
		}
		if (empty($pass)) {
			array_push($errors, "pass is required");
		}

		if (count($errors) == 0) {
			
			$pass = md5($pass);
			$query = "SELECT * FROM acc2 WHERE email='$email1' AND pass='$pass'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email1'] = $email1;
				$_SESSION['success'] = "You are now logged in";
				header('location:index1.php');
			}else {
				array_push($errors, "Wrong email/pass combination");
			}
		}
	}

	
	if(isset($_POST['send']))
	{
		$user = mysqli_real_escape_string($db,$_SESSION['email']);
		$msg = mysqli_real_escape_string($db, $_POST['msg']);

/**$target_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        
     **/
             $date=date("Y-m-d H:i:s");  
$sql = "INSERT INTO chat (email,message,date)
VALUES ('$user','$msg','$date')";

if (mysqli_query($db, $sql)) {
    echo "<script>alert('Successfully Sent');</script>";

  }
else
{
	 echo "<script>alert('Not Sent');</script>";
	}
}

//msg2

	
	if(isset($_POST['send1']))
	{
		$user = mysqli_real_escape_string($db,$_SESSION['email1']);
		$msg = mysqli_real_escape_string($db, $_POST['msg']);

/**$target_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        
     **/
             $date=date("Y-m-d H:i:s");  
$sql = "INSERT INTO chat (email,message,date)
VALUES ('$user','$msg','$date')";

if (mysqli_query($db, $sql)) {
    echo "<script>alert('Successfully Sent');</script>";

  }
else
{
	 echo "<script>alert('Not Sent');</script>";
	}
}
?>