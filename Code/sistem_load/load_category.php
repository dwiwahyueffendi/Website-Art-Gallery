<!--Image Databas -->
<?php
    if ($sqlCategory === FALSE) {
        die(mysqli_error());
    }

	$num_rows = mysqli_num_rows(mysqli_query($conn,$sqlCategory));		
	####### Fetch Results From Table ########
	$result = mysqli_query($conn,$sqlCategory;
	while($row = mysqli_fetch_array($result)){
	$mygambar=$row['GAMBAR'];
?>	
<?php	echo "<a href='$mygambar' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='$mygambar' class='inline-block resizeImage'/></a> ";?>			
<?php } ?>				