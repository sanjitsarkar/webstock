<?php
    require_once("db.php");
$id = $_GET['id'];
        $sql = "DELETE FROM wishlist WHERE id={$id}";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Removed From WISHLIST!!!');</script>";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
