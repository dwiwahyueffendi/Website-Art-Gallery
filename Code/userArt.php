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
<!-- Navbar -->
<nav id="nav1" class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand baloo" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <form class="d-flex">
            <input class="form-control me-2 lebar round balooBlack" type="search" placeholder="  Search..." aria-label="Search">
            <button class="btn btn-outline-success lebar1 round balooBlack" type="submit">Search</button>
          </form>
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-outline-success dropdown-toggle lebar1 round balooBlack" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item balooBlack1" href="#">Animal</a></li>
              <li><a class="dropdown-item balooBlack1" href="#">Anime</a></li>
              <li><a class="dropdown-item balooBlack1" href="#">City</a></li>
              <li><a class="dropdown-item balooBlack1" href="#">Nature</a></li>
              <li><a class="dropdown-item balooBlack1" href="#">Photography</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item up">
          <a href="#">
            <img src="Image/icon/account.png" width="25">
          </a>
        </li>

        <li class="nav-item up">
          <a href="login.php">
            <img src="Image/icon/logout.png" width="25">
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Body Container -->
<br><br><br><br>
<?php  
			include "conn.php";
      $sqlusername = "SELECT * FROM akun where USERNAME = 'dwiwahyu'";
			$sql = "SELECT * FROM post";
?>
<div class="container">
	<div class="one-whole text-center">
    <!-- Image Account -->
    <img id="imageaccount" src="Image/icon/accountblack.png" width="150px"><br>

    <!-- Username Account -->
		<?php  
      $resultusername = mysqli_query($conn,$sqlusername);
      while($data = mysqli_fetch_array($resultusername)){
		?>
    <h1 id="username"><?php echo $data["USERNAME"];}?></h1>

    <!--My Collection -->
    <h1 id="collection">My Collection Art</h1><br><br>

    <!--Image Databas -->
		<?php  
			$num_rows = mysqli_num_rows(mysqli_query($conn,$sql));		
			####### Fetch Results From Table ########
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_array($result)){
      $mygambar=$row['GAMBAR'];
		?>	
		<?php	echo "<a href='$mygambar' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='$mygambar' class='inline-block resizeImage'/></a> ";?>			
		<?php } ?>				
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