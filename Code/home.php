<?php
  session_start();

  //Cek apakah user sudah login atau belum
  if(!isset($_SESSION['login']))
  {
    header("Location: login.php");
    exit;
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
        font-color: #000000;
        padding: 0px;
        color: #000000!important;
        text-decoration:none;
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
        border: solid red 4px;
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
      $sqlCategory = mysqli_query($conn, "SELECT * FROM kategori ORDER BY NAMAKATEGORI ASC");
			$sqlPost = "SELECT * FROM post ORDER BY IDKATEGORI DESC";
?>

<!-- Navbar -->
<nav id="nav1" class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand baloo" href="home.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <form class="d-flex">
            <input class="form-control me-2 lebar round balooBlack" type="search" placeholder="  Search..." aria-label="Search" name="cariTitle">
            <button class="btn btn-outline-success lebar1 round balooBlack" type="submit" value="cariTitle">Search</button>
          </form>
        </li>

        <?php 
          if(isset($_GET['cariTitle'])){
            $cari = $_GET['cariTitle'];
              $sqlPost = "SELECT * FROM post WHERE TITLE LIKE '%".$cari."%' OR DESKRIPSI LIKE '%".$cari."%'";				
          }else{
            $sqlPost = "SELECT * FROM post ORDER BY IDKATEGORI DESC";	
          }
        ?>

        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-outline-success dropdown-toggle lebar1 round balooBlack" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <?php if(mysqli_num_rows($sqlCategory)) { ?>
              <?php
                $idCategory = 0;
                while($row_kat = mysqli_fetch_array($sqlCategory)) {
                  $idCategory++;
                  //$id=$row_kat['IDKATEGORI'];
              ?>
                <li>
                <!--
                <div class="dropdown-item balooBlack1">
                  <?php
                    //echo "<option value=". $row_kat['IDKATEGORI'] .">". $row_kat['NAMAKATEGORI'] ."</option>";
                  ?>
                  <?php
                    //echo"<a href='category.php?categoryid=$idCategory'></a>"
                  ?>
                </div> -->

                  <div class="dropdown-item">
                    <?php
                      //echo $row_kat["NAMAKATEGORI"];
                      echo"<a class='balooBlack1' href='category.php?categoryid=$idCategory'>". $row_kat['NAMAKATEGORI']."</a>"
                      //echo "<option value=". $row_kat['IDKATEGORI'] .">". $row_kat['NAMAKATEGORI'] ."</option>";
                    ?>
                  </div>            
                </li>
              <?php } ?>
              <?php } ?>
            </ul>
          </div>
        </li>

        <li class="nav-item up">
          <a href="userArt.php">
            <img src="Image/icon/account.png" width="25">
          </a>
        </li>

        <li class="nav-item up">
          <a href="logout.php">
            <img src="Image/icon/logout.png" width="25">
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>

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
    require('sistem_load/load_home.php');
  ?>	
	</div>			
</div>
  
<script src="bootstrap/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>