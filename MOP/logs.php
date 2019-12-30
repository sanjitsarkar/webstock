<?php

$con = mysqli_connect('localhost','root','','hyndex');

$sql = "SELECT * FROM chats ORDER BY chatid DESC";
    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){


	echo "<span>" . $row['email'] . "</span>: <span>" . $row['message'] . "</span><br/>";
}
}
}
?>