<?php
function search_the_same($search_hash, $directory) {
	$the_same_image = [];
	if (is_dir($directory)) {
  	    if ($dir_opened = opendir($directory)) {
  	      while (($file = readdir($dir_opened)) !== false) {
  	        imagecreatefrompng($file);     
        	$next_image_hash = hash_file('md5', $file);
        	if ($next_image_hash == $search_hash) {
        		$the_same_image[] = $file;
        	}            
      	  }
      	  closedir($dir_opened);
  	    }
	}
	return $the_same_image;
}

$directory = "./images/";
$search_image = "image.png";
imagecreatefrompng($search_image);
$search_hash = hash_file('md5', $search_image); 
$images = function search_the_same($search_hash, $directory);
