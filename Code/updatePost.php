<?php
  session_start();
  $id = $_SESSION['username'];
  $id_post = $_REQUEST['postid'];
?>
<!doctype html>
<html>
<head>
    <title>Art Gallery</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/custom_style.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link href="style/style.css" rel="stylesheet"> -->
    <style>
      @font-face{
        font-family: 'Baloo'; /*memberikan nama bebas untuk font*/
        src: url('Font/Baloo/Baloo.ttf');/*memanggil file font eksternalnya di folder Baloo*/
      }
      
    </style>
</head>
<body>
<nav id="nav1" class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand baloo def_color" href="home.php">Home</a>
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
              <?php
                require('sistem_load/conn.php');
                $result = mysqli_query($conn, "SELECT * FROM kategori");
                while($row_nav = mysqli_fetch_array($result)){
                    // echo "<option value=". $row_kat['IDKATEGORI'] .">". $row_kat['NAMAKATEGORI'] ."</option>";
                    echo "<li><a class='dropdown-item balooBlack1' href='userArt.php?search=". $row_nav['IDKATEGORI'] ."'>". $row_nav['NAMAKATEGORI'] ."</a></li>";
                }
              ?>
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

<!-- ************************* -->

<div class="container" style="margin-top:64px">
	<div class="one-whole">       
      <!-- <hr style="border:solid black 4px;margin-top:0px;"> -->
      <h1 class="padding-large text-center baloo" style="font-size:30px">Submit Your Art</h1>
      <br>
      <p>
      <?php
        require('sistem_load/load_form.php');
        require('sistem_load/insertFile.php');
      ?>
			</p>	
	</div>		
</div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/jquery-3.5.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>