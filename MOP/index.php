 <?php
  session_start(); 

  if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
 
  }

?>
<?php
	if (isset($_POST['submit'])) {
    require_once("db.php");

$cname=$_POST['cname'];
$ex=$_POST['ex'];
$sym=$_POST['sym'];

             $cdate=date("Y-m-d H:i:s");  
$target_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
$sql = "INSERT INTO wishlist (cname, ex, sym,cdate,img)
VALUES ('$cname', '$ex','$sym','$cdate','$target_file')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully added to WISHLIST!!!');</script>";
  }


     else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<style type="text/css">
  .container.form
  {

 position: relative;
 left:25%;
  }
  .widget
  {

 position: relative;
 left:0%;
 width:100%;

  }
  button.b
  {
    width:80px;
    height:30px;
    border-radius:8px;
    text-align: center;
    color:white;
    font-size:small;

    background-color:#E50039;

  }
    button.c
  {
    width:80px;
    height:30px;
    border-radius:8px;
    text-align: center;
    color:#E50039;
    font-size:x-small;

    background-color:#ffff;

  }

</style>


</head>
<body>

  <section class="mbr-section content4 cid-qIFg3TsGYT" id="content4-q">



    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">HYNDEX PANEL</h2>
<?php echo" Hi, ".$_SESSION['email']." "; ?>
                <a href="index.php?logout='1'" style="color: red;">logout</a>

                
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

            </div>
        </div>
    </div>
</section>



<iframe class="widget" src="CHART.html"></iframe>

<section class="mbr-section article content9 cid-qIX1yZivt3" id="content9-18">



    <div class="container form">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
               <div class="col-lg-4 col-md-5">
              <div class="form-container">
                      <form class="mbr-form" method="post" action="" data-form-title="Mobirise Form" enctype="multipart/form-data">
                        
                          <div data-for="name">
                              <div class="form-group">
                                  <input type="text" class="form-control px-3" name="cname" data-form-field="Name" placeholder="NAME" required="" id="name-header15-13" class="cname">
                              </div>
                          </div>
                          <div data-for="email">
                              <div class="form-group">
                                  <input type="text" class="form-control px-3" name="ex" data-form-field="Email" placeholder="EXCHANGE" required="" id="email-header15-13" class="ex">
                              </div>
                          </div>
                          <div data-for="phone">
                              <div class="form-group">
                                  <input type="text" class="form-control px-3" name="sym" data-form-field="Phone" placeholder="SYMBOL" id="phone-header15-13" class="sym">
                              </div>
                          </div>

                          <div data-for="image">
                              <div class="form-group">
                                  <input type="file" class="form-control px-3" name="img" data-form-field="Phone" placeholder="SYMBOL" id="phone-header15-13" class="img">
                              </div>
                          </div>
                          <span class="input-group-btn"><input type="submit" class="btn btn-secondary btn-form display-4" name="submit" value="Add to WISHLIST"/></span>
                      </form>

            </div>
        </div>
            <hr class="line" style="width: 25%;">
        </div>
      </div>
        </div>
</section>

<section class="features4 cid-qIWJbabRYy" id="features4-17">




    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">THOUGHT 1</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            SOMETIMES IT IS BETTER AND PROFITABLE TO INVEST IN NOTHING THEN SOMETHING&nbsp;<br><br></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            THOUGHT 2</h4>
                        <p class="mbr-text mbr-fonts-style display-7">IN A MARKET ONLY TREND IS OUR FRIEND SO WAIT FOR HIM FOR YOUR COMPANY TOWARDS SUCCESS<br></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            THOUGHT 3</h4>
                        <p class="mbr-text mbr-fonts-style display-7">LOSS IS NOTHING BUT A TYPE OF OVER EXPENDATURE IN A BUSNESS IS ALWAYS HAPPEN.WE SHOULD LEARN FORM IT.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="mbr-section info1 cid-qIY08f7sfj" id="info1-1b">




    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">

                <h2 class="align-left mbr-bold mbr-fonts-style display-2">MY WISHLIST</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">

            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-qIXZD7TXbv" id="gallery1-19">

      <div class="container">




</div>
    <div class="container">
        <!-- Filter --><!-- Gallery -->
        <div> <div class="mbr-gallery-row">
      <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "hyndex");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt select query execution
    $sql = "SELECT * FROM wishlist";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){
              echo '
              <div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false" data-tags="Awesome">
                <div href="#lb-gallery1-19" data-slide-to="0" data-toggle="modal">'; print'<img src="'.$row['img'].'">'; echo'<span class="icon-focus " >';
         echo'<a href="stock.php?id='.$row['id'].''; echo'&cname='.$row['cname'].'">'; echo'</span>


                <span class="mbr-gallery-title mbr-fonts-style display-7 c ">';  echo $row['sym']; echo '

              <button class="b" ><a href="delete.php?id='.$row['id'].'">Delete</a></button> 
              
              <button class="b" ><a href="SEND.php?id='.$row['id'].''; echo'&cname='.$row['cname'].'">'; echo'CHECK</a></button>  </span>
              </div>
            </div>';
            }

            // Free result set
            mysqli_free_result($result);
        } else{

                    echo '<div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false" data-tags="Awesome">
                      <div href="#lb-gallery1-19" data-slide-to="0" data-toggle="modal"><img src="assets/images/gallery00.jpg" alt=""><span class="icon-focus">
                   </span>


                      <span class="mbr-gallery-title mbr-fonts-style display-7">  No WISHLIST Added</span>
                    </div>
                  ';
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);
    ?>


  </div>
  </div>




</section>

<section class="mbr-section info1 cid-qIY0qHPCP9" id="info1-1c">




    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">

                <h2 class="align-left mbr-bold mbr-fonts-style display-2">REQUESTS</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">

            </div>
        </div>
    </div>
</section>



<section class="mbr-gallery mbr-slider-carousel cid-qIXZD7TXbv" id="gallery1-19">

      <div class="container">




</div>
    <div class="container">
        <!-- Filter --><!-- Gallery -->
        <div> <div class="mbr-gallery-row">
      <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "hyndex");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt select query execution
    $sql = "SELECT * FROM wishlist WHERE active=1";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){
              echo '
              <div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false" data-tags="Awesome">
                <div href="#lb-gallery1-19" data-slide-to="0" data-toggle="modal">'; print'<img src="'.$row['img'].'">'; echo'<span class="icon-focus " >';
          echo '<a href="acc2.php?id='.$row['id'].'">'; echo $row['cname'];
                echo ' </a> </span>


                <span class="mbr-gallery-title mbr-fonts-style display-7 c ">';  echo $row['sym']; echo '

              
            <button class="c" ><a href="UNCHECK.php?id='.$row['id'].'">'; echo'UNCHECK</a></button></span>
              </div>
            </div>';
            }

            // Free result set
            mysqli_free_result($result);
        } else{

                    echo '<div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false" data-tags="Awesome">
                      <div href="#lb-gallery1-19" data-slide-to="0" data-toggle="modal"><img src="assets/images/gallery00.jpg" alt=""><span class="icon-focus">
                   </span>


                      <span class="mbr-gallery-title mbr-fonts-style display-7">  No Request Sent</span>
                    </div>
                  ';
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);
    ?>


  </div>
  </div>




</section>


<section class="cid-qIWHQew6kU mbr-fullscreen mbr-parallax-background" id="header15-13">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
            ADD A NEW HYNDEX STOCK</h1>

    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            <div data-form-alert="" hidden="" class="align-center">DONE</div>
            <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="nLwEv9NsrbUi9NCP/uR002UEXJaowUiPTkJ+cxx7ojyVALA/Fer5/5eByJSv3XeabY0dxj81MJRozBh64tz+hOcy39UM/SEa6IfqbyiTJZMlT7eZ7wj+hihnyoLEuzNV" data-form-field="Email">
                <div data-for="name">
                    <div class="form-group">
                        <input type="text" class="form-control px-3" name="name" data-form-field="Name" placeholder="NAME" required="" id="name-header15-13">
                    </div>
                </div>
                <div data-for="email">
                    <div class="form-group">
                        <input type="email" class="form-control px-3" name="email" data-form-field="Email" placeholder="EXCHANGE" required="" id="email-header15-13">
                    </div>
                </div>
                <div data-for="phone">
                    <div class="form-group">
                        <input type="tel" class="form-control px-3" name="phone" data-form-field="Phone" placeholder="SYMBOL" id="phone-header15-13">
                    </div>
                </div>

                <span class="input-group-btn"><button href="" type="submit" class="btn btn-secondary btn-form display-4">SUBMIT</button></span>
            </form>
        </div>
    </div>
    </div>
</div>
    </div>

</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


  <input name="animation" type="hidden">
  </body>
</html>
