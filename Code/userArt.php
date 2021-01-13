<?php
  session_start();
  $id = $_SESSION['username'];

  if(isset($_REQUEST['username'])){
    $id=$_REQUEST['username'];
  }else{
    $id = $_SESSION['username'];
  }
?>

<!doctype html>
<html>
<head>
    <title>Art Gallery</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
      @font-face{
        font-family: 'Baloo'; /*memberikan nama bebas untuk font*/
        src: url('Font/Baloo/Baloo.ttf');/*memanggil file font eksternalnya di folder Baloo*/
      }
      #nav1{
        margin-left: 0px;
        background-color: #31726E;
      }
      .container-fluid{
        margin-left:150px;
      }
      .baloo{
        font-family: Baloo;
        font-size: 24px;
        font-weight: bold;
        padding: 0px;
        color: #FFF6C4!important;
      }
      .balooBlack{
        font-family: Baloo;
        font-size: 20px;
        padding: 0px;
        color: #000000!important;
      }
      .balooBlack1{
        font-family: Baloo;
        font-size: 16px;
        padding: 0px;
        color: #000000!important;
        margin-left: 15px;
      }
      body{
        background-color: #FFFFFF;
      }
      .nav-item{
        margin-right: 10px;
      }
      .up{
        margin-top: 3px;
      }
      .lebar{
        width: 500px;
      }
      .lebar1{
        width:140px;
        background-color: #FFF6C4;
      }
      .round{
        border-radius: 10px;
      }
      .box{
        margin: 0 auto;
        width: 950px;
        height: 1600px;
        background-color: #FFFFFF;
      }
      .insertBtn{
        width: 50px;
        float: right;
        margin-right: 20px;
        margin-bottom: 20px;
      }
      /*============================================*/

      .one-whole{
        width: 1100px;
        margin-left: 0px;
        border: solid red 0px;
      }

      #username{
        font-family: Baloo;
        font-size: 40px;
        color: #000000;
      }

      #collection{
        font-family: Baloo;
        font-size: 25px;
        color: #000000;
        float: left;
        margin-left: 20px;
      }

      .resizeImage{
        height: 300px;
        width: 200px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 10px;
        border-radius: 20px;
        border: solid black 0px;
      }
    </style>
</head>
<body>

<?php  
      include "conn.php";
      $sqlPost = "SELECT * FROM post where USERNAME = '$id'";
?>

<!-- Navbar -->
<div>
      <?php
          require('sistem_load/nav.php');
      ?>
</div>
<!-- Button Insert -->
<div class="fixed-bottom">
  <a href="insert-layoutv2.php">
    <img class="insertBtn" src="Image/icon/insertButton.png">
  </a>
</div>
<!-- Body Container -->
<br><br><br><br>
<div class="container">
	<div class="one-whole text-center">
  <?php
    require('sistem_load/load_galeri.php');
  ?>
	</div>			
</div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>