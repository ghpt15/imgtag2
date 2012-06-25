<html>
	<head>
		<title>Upload New Image</title>
	</head>
	<html>
		<body>
		
        <form id="upload-form" action="<?php echo URL::site('create/upload') ?>" method="post" enctype="multipart/form-data">
            <p>Choose file:</p>
            <p><input type="file" name="avatar" id="avatar" /></p>
            <p><input type="submit" name="submit" id="submit" value="Upload" /></p>
        </form>
			
			
		</body>
	</html>
</html>