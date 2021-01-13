<?php
    $sqlCategory = mysqli_query($conn, "SELECT * FROM kategori ORDER BY NAMAKATEGORI ASC");
?>
<nav id="nav1" class="navbar navbar-expand-lg navbar-light fixed-top" style="padding-left:20px">
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
                
                while($row_kat = mysqli_fetch_array($sqlCategory)) {
                   $idCategory=$row_kat['IDKATEGORI'];
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