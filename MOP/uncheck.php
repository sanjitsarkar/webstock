 <?php
  /* Attempt MySQL server connection. Assuming you are running MySQL
  server with default setting (user 'root' with no password) */
  $link = mysqli_connect("localhost", "root", "", "hyndex");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  // Attempt select query execution

    $id = $_GET['id'];
            $sql = "UPDATE wishlist SET active=0 WHERE id={$id}";
  if($result = mysqli_query($link, $sql)){
  echo'<script>alert("Unchecked Successfully.")</script>';

header('Refresh:0.1; url=index.php');
}
?>