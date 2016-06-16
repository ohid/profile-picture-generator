<?php 
namespace abeautifulsite;

require 'class/SimpleImage.php';

// Make the directory 
if(!is_dir('uploads/')) {
    mkdir('uploads/');
}

if(isset($_FILES['picture'])) {
	$file = $_FILES['picture'];

	// Files Properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = '';
	$file_size_allowed = 2 * 1024 * 1024;

	// Working with file extension
	$file_ext = explode('.', $file_name);
	$file_ext = strtolower(end($file_ext));

	$allowed = array('jpeg', 'jpg', 'png');
	// echo print_r($_FILES['picture']);

	if(in_array($file_ext, $allowed)) {
		if($file_size >= $file_size_allowed) {
			$file_error = '* Maximum Uploaded file size is 2mb';
		} else {
			$file_name_new = uniqid('', true) . '.' . 'jpeg';
			$file_destination = 'uploads/' . $file_name_new;

			try {

			    $img = new SimpleImage();

			    // Overlay
			    $img->load($file_tmp)->resize(600, 744)->overlay('img/overlay-all.png', 'bottom right', 1)->save($file_destination);
			    $uploadedFile = $file_name_new;

			} catch (Exception $e) {
			    header('location: index.php');
			}
		}
	} else {
		$file_error = '* File extension is not supported';
	}

}