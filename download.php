<?php 

if(isset($_GET['id'])) {
	$file = $_GET['id'];
	header('Content-type: image/jpeg');
	header('Content-Disposition: attachment; filename="'. $file .'"');
	readfile('uploads/' . $file);
	header('Location: index.php');
} else {
	header('Location: index.php');
}