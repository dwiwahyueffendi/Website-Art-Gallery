<!--Image Databas -->
	<?php  
		$num_rows = mysqli_num_rows(mysqli_query($conn,$sqlPost));		
		####### Fetch Results From Table ########
		$result = mysqli_query($conn,$sqlPost);
		while($row = mysqli_fetch_array($result)){
			//$post=$row['IDKATEGORI'];
			//echo"<a href='focus-layoutv2.php?categoryid=$idCategory'>". $row_kat['NAMAKATEGORI']."</a>"
			$id_post=$row['IDPOST'];
			$mygambar=$row['GAMBAR'];
	?>	
	<?php	echo "<a href='focus-layoutv2.php?postid=$id_post' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='$mygambar' class='inline-block resizeImage'/></a> ";?>			
	<?php } ?>