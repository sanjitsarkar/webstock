<?php

include('server.php');

  if (!isset($_SESSION['email1'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login2.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email1']);
    header('location: login2.php');
 
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
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style type="text/css">
  .date
  {
    color:black;
    font-style:italic;
    font-size:18px;
    float:right;
    z-index: 1;
  }
  .msg
  {
    text-align: center;
    color:blue;
z-index: 1;
  }
  #bubble
  {
    margin-top:50px;
    background:white;
   border:1px solid blue;
    z-index:0;
    
    border-top-left-radius:10px;
     border-bottom-right-radius:10px;
    
  }
  #box
  {
    background-color: lightblue;
    width:1000px;
    height: 510px;
    overflow: scroll;
}
  
</style>
  
</head>
<body>
  <section class="menu cid-qIWDnv6hYH" once="menu" id="menu2-11">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="index1.php">FIRST SAVE MONEY THEN MAKE IT</a></span>

<?php echo" Hi, ".$_SESSION['email1']." "; ?>
                <a href="acc2.php?logout='1'" style="color: red;">logout</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="https://mobirise.com">
                        SAVE</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="https://mobirise.com">
                        PENDING</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="https://mobirise.com">
                        TRADING PANEL</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="https://mobirise.com">DELETE</a>
                </li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/e">best website development software</a></section><section class="mbr-section content4 cid-qIFg3TsGYT" id="content4-q">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">TRADE BUT NEVER GAMBLE</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="carousel slide cid-qID7opUJ8N" data-interval="false" id="slider1-l">



    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-l" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-l" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-l" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider1-l" data-slide-to="3"></li><li data-app-prevent-settings="" data-target="#slider1-l" data-slide-to="4"></li><li data-app-prevent-settings="" data-target="#slider1-l" data-slide-to="5"></li><li data-app-prevent-settings="" data-target="#slider1-l" class=" active" data-slide-to="6"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper">
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">


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
                $sql = "SELECT * FROM wishlist WHERE id={$id}";
      if($result = mysqli_query($link, $sql)){

              while($row = mysqli_fetch_array($result)){

        $ex=$row['ex'];
        $sym=$row['sym'];
        $ex.=":";
        $ex.=$sym;
        echo'
        new TradingView.widget({
          "width": 980,
          "height": 610,
          "symbol":"'.$ex.'",
          "interval": "D",
          "timezone": "Etc/UTC",
          "theme": "Light",
          "style": "1",
          "locale": "en",
          "toolbar_bg": "#f1f3f6",
          "enable_publishing": false,
          "allow_symbol_change": true,
          "hideideas": true
        });';
      }
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($link);
      }

      mysqli_close($link);

      ?>

    </script>
<img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"></div></div></div></div></div>
<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper"><script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">


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
            $sql = "SELECT * FROM wishlist WHERE id={$id}";
  if($result = mysqli_query($link, $sql)){

          while($row = mysqli_fetch_array($result)){

    $ex=$row['ex'];
    $sym=$row['sym'];
    $ex.=":";
    $ex.=$sym;
    echo'
    new TradingView.widget({
      "width": 980,
      "height": 610,
      "symbol":"'.$ex.'",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "hideideas": true
    });';
  }
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

  mysqli_close($link);

  ?>

</script><img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper"><script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">


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
            $sql = "SELECT * FROM wishlist WHERE id={$id}";
  if($result = mysqli_query($link, $sql)){

          while($row = mysqli_fetch_array($result)){

    $ex=$row['ex'];
    $sym=$row['sym'];
    $ex.=":";
    $ex.=$sym;
    echo'
    new TradingView.widget({
      "width": 980,
      "height": 610,
      "symbol":"'.$ex.'",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "hideideas": true
    });';
  }
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

  mysqli_close($link);

  ?>

</script><img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper">
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">


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
            $sql = "SELECT * FROM wishlist WHERE id={$id}";
  if($result = mysqli_query($link, $sql)){

          while($row = mysqli_fetch_array($result)){

    $ex=$row['ex'];
    $sym=$row['sym'];
    $ex.=":";
    $ex.=$sym;
    echo'
    new TradingView.widget({
      "width": 980,
      "height": 610,
      "symbol":"'.$ex.'",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "hideideas": true
    });';
  }
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

  mysqli_close($link);

  ?>

</script>
<img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"></div></div></div></div></div>
<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper"><script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">


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
            $sql = "SELECT * FROM wishlist WHERE id={$id}";
  if($result = mysqli_query($link, $sql)){

          while($row = mysqli_fetch_array($result)){

    $ex=$row['ex'];
    $sym=$row['sym'];
    $ex.=":";
    $ex.=$sym;
    echo'
    new TradingView.widget({
      "width": 980,
      "height": 610,
      "symbol":"'.$ex.'",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "hideideas": true
    });';
  }
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

  mysqli_close($link);

  ?>

</script><img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper"><script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">


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
            $sql = "SELECT * FROM wishlist WHERE id={$id}";
  if($result = mysqli_query($link, $sql)){

          while($row = mysqli_fetch_array($result)){

    $ex=$row['ex'];
    $sym=$row['sym'];
    $ex.=":";
    $ex.=$sym;
    echo'
    new TradingView.widget({
      "width": 980,
      "height": 610,
      "symbol":"'.$ex.'",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "hideideas": true
    });';
  }
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

  mysqli_close($link);

  ?>

</script><img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"></div></div></div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/3.jpg);"><div class="container container-slide"><div class="image_wrapper">
<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">


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
            $sql = "SELECT * FROM wishlist WHERE id={$id}";
  if($result = mysqli_query($link, $sql)){

          while($row = mysqli_fetch_array($result)){

    $ex=$row['ex'];
    $sym=$row['sym'];
    $ex.=":";
    $ex.=$sym;
    echo'
    new TradingView.widget({
      "width": 980,
      "height": 610,
      "symbol":"'.$ex.'",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "hideideas": true
    });';
  }
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

  mysqli_close($link);

  ?>

</script>
<img src="assets/images/3.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-right"></div></div></div></div></div></div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-l"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-l"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a></div></div>

</section>

<section class="mbr-section form1 cid-qITVmsg7SB" id="form1-v">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    NOTES</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">IT IS BETTER TO INVEST IN NOTHING THEN SOMETHING</h3>
            </div>
        </div>
    </div>
    <div class="container">
 <form class="mbr-form" action="acc2.php" method="post" data-form-title="Mobirise Form" >
                            <textarea type="text" class="form-control" name="msg" rows="7" data-form-field="Message" id="message-form1-v"></textarea>
                            <input type="file" name="file">
                        </div>
            
                        <span class="input-group-btn"><button type="submit" class="btn btn-primary btn-form display-4" name="send1">SEND REQUEST</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>


<section class="mbr-section article content3 cid-qIWC3kmqrw" id="content3-z">




    <div class="container">
        <div class="media-container-row">
                  
            <div id="box">   
     <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "hyndex");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt select query execution
    $sql = "SELECT * FROM chat";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){
              $mg=$row['message'];
           
        
     
             $date=date("Y-m-d H:i:s");  

echo'<div id="bubble">';
echo $row['email'];
echo "\n";
echo'
<div class="msg">'.$mg.'</div>';
echo'<div class="date">'.$date.'</div> </div> '; 
}
            // Free result set
            mysqli_free_result($result);
        } else{

                    echo 'No Messages';
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

?></div>
        </div>
    </div>
</section>




  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>