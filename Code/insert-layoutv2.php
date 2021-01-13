<?php
  session_start();
  $id = $_SESSION['username'];
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
      #nav1{
        margin-left: 0px;
        background-color: #31726E;
      }
    </style>
</head>
<body>
<div>
  <?php
    require('conn.php');
    require('sistem_load/nav.php');
  ?>
</div>

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