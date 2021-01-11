<?php 

// Create an image from given image 
$im = imagecreatefrompng( 
'https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-9.png'); 

// find the size of image 
$size = min(imagesx($im), imagesy($im)); 

// Set the crop image size 
$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => 250, 'height' => 150]); 
if ($im2 !== FALSE) { 
	header("Content-type: image/png"); 
	imagepng($im2); 
	imagedestroy($im2); 
} 
imagedestroy($im); 
?> 
