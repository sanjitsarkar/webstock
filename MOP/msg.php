<?php
session_start();
$uname = $_SESSION['email'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost','root','','hyndex');


$sql1="INSERT INTO chats (`email`, `message`) VALUES ('$uname', '$msg')";
mysqli_query($con, $sql1);
$sql="SELECT * FROM chats ORDER BY id DESC";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){
 
	echo "<span>" . $row['email'] . "</span>: <span>" . $row['message'] . "</span><br />";
}
}
}

?>