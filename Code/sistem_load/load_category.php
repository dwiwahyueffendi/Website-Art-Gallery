<!--Image Databas -->
<?php
	$num_rows = mysqli_num_rows(mysqli_query($conn,$sqlCat));		
	####### Fetch Results From Table ########
	if($num_rows != 0){
		$result = mysqli_query($conn,$sqlCat);
		while($row = mysqli_fetch_array($result)){
			$mygambar = $row['GAMBAR'];
			$id_post = $row['IDPOST'];
			echo "<a href='focus-layoutv2.php?postid=$id_post' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img width=200 height=300 src='$mygambar' class='inline-block resizeImage'/></a> ";
		}
	}else{
		echo "<h2>Kosong</h2>";
	}
?>				