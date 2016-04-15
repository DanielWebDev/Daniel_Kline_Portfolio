<?php
//	Project:	PHP Solution 7-6: Prompting a user to download an image
//	Course:		Web Application Technologies
//	Creator:	Daniel Kline
//	Date:		4/17/12
//	File name: 	download.php
//	Notes: 		$error and $path variables correspond to the current server [localhost or school/hosting] -->

	// define error page
	$error = './dwk_errors/error.php';

	// define the path to the download folder
	$filepath = './dwk_assets/';
	
	$getfile = NULL;
	
	// block any attempt to explore the filesystem
	if (isset($_GET['file']) && basename($_GET['file']) == $_GET['file']) {
		$getfile = $_GET['file'];
	} else {
		header("location: $error");
		exit;
	}
	
	if ($getfile) {
		$path = $filepath . $getfile;
		// check that it exists and is readable
		if (file_exists($path) && is_readable($path)) {
			// get the file's size and send the appropriate headers
			$size = filesize($path);
			header('Content-Type: application/octet-stream');
			header('Content-Length: ' . $size);
			header('Content-Disposition: attachment; filename=' . $getfile);
			header('Content-Transfer-Encoding: binary');
			// open the file in read-only mode
			// suppress error messages if the file can't be opened
			$file = @fopen($path, 'r');
			if ($file) {
				// stream the file and exit the script when complete
				fpassthru($file);
				exit;
			} else {
				header("Location: $error");
			}
		} else {
			header("Location: $error");
		}
	}
?>
        <!-- google analytics for download.php page -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-75441405-1', 'auto');
          ga('send', 'pageview');
        </script>
