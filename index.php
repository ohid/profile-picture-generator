<?php 
	require_once 'picture-process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="profile picture, generator, zilla school">
	<meta name="author" content="Ohidul Islam">	
	<title>PROFILE PIC GENERATOR FOR ZILLA SCHOOL BOYS</title>
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://bootswatch.com/lumen/bootstrap.min.css">
	<link rel="stylesheet" href="css/input-file-styling.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	
	<div class="container-fluid homepage">
		<div class="overlay">
			<div class="upload-combo">
				<h1>PROFILE PIC GENERATOR FOR ZILLA SCHOOL BOYS</h1>
				
				<?php 
					if (!isset($uploadedFile)) { ?>
						<div class="box">
							<div class="sample-images">
								<img src="img/three.jpeg" alt="">
								<img src="img/two.jpeg" alt="">
								<img src="img/one.jpeg" alt="">
							</div>
							
							<div class="upload-file-area">
								<h2>Select your picture and upload it to generate one:</h2>
								<p><?php echo @$error; ?></p>
								<?php 
									if(isset($file_error)) {
										echo '<p class="error"> '. $file_error .' </p>';
									}
								?>
								

								<form action="" method="post" class="clearfix" enctype="multipart/form-data">
									<input type="file" name="picture" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
									<label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose your picture&hellip;</span></label>
									<input type="submit" value="Upload" class="btn-submit">
								</form>

								<div class="rules clearfix">
									<li>Your photo resolution should be 744 x 600</li>
									<li>Max file upload size is 2mb</li>
									<li>(jpeg, jpg, png) image formats are supported</li>
								</div>

							</div>


							<div class="foot_note"><p class="copyright"> copyright &copy; <a href="http://fb.com/ohid.jsr">Ohidul Islam</a></p></div>
						</div>
				<?php } else { ?>

					<div class="box">
						<div class="uploaded_file">
							<img src="uploads/<?php echo $uploadedFile; ?>" alt="">
						</div>
						<div class="download">
							<a href="download.php?id=<?php echo $uploadedFile; ?>" class="download_link">Download it</a>
							<a href="index.php" class="home_page">Generate another</a>
						</div>
					</div>

				<?php }
				?>



			</div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/custom-file-input.js"></script>
</body>
</html>