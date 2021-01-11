    <!-- Image Account -->
    <img id="imageaccount" src="Image/icon/accountblack.png" width="150px"><br>

    <!-- Username Account -->
		<?php  
      $resultUsername = mysqli_query($conn,$sqlUsername);
      while($data = mysqli_fetch_array($resultUsername)){
		?>
    <h1 id="username"><?php echo $data["USERNAME"];}?></h1>

    <!--My Collection -->
    <h1 id="collection">My Collection Art</h1><br><br>

    <!--Image Databas -->
		<?php  
			$num_rows = mysqli_num_rows(mysqli_query($conn,$sqlPost));		
			####### Fetch Results From Table ########
			$result = mysqli_query($conn,$sqlPost);
			while($row = mysqli_fetch_array($result)){
      $myGambar=$row['GAMBAR'];
      $myThumb=$row['THUMBNAIL'];
		?>	
		<?php	echo "<a href='$myGambar' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='$myThumb' class='inline-block resizeImage'/></a> ";?>			
		<?php } ?>				
		