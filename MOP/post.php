<?php
	if (isset($_POST['submit'])) {
    require_once("MOP/db.php");
   session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
echo $email;
    /* Check Email and Password existence in DB */
    $result = mysqli_query($conn, "SELECT * FROM acc WHERE email='$email' AND pass='$pass' LIMIT 1");
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        /* Success: Set session variables and redirect to Protected page */
       
	$_SESSION["email"] = $row['email'];
	echo"Sucess";
    } else {
        /* Unsuccessful attempt: Set error message */
       echo "Wrong Password Or Email!!";
    }
    


mysqli_close($conn);
}
?>