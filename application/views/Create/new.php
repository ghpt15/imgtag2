<html>
	<head>
		<title>ImgTag - Upload New Image</title>
		<?php
			echo HTML::script('assets/js/jquery-1.7.2.min.js');
			echo HTML::script('assets/js/jquery-ui.1.8.20.min.js'); 
			echo HTML::script('assets/js/tagit.js');
			echo HTML::script('assets/bootstrap/js/bootstrap.min.js'); 
		
			echo HTML::style('assets/css/jquery-ui-base-1.8.20.css');
			echo HTML::style('assets/css/tagit-stylish-yellow.css');
			echo HTML::style('assets/bootstrap/css/bootstrap-amelia.css');
			echo HTML::style('assets/css/main.css');
		?>
	</head>
<html>
<body data-spy="scroll" data-target=".subnav" data-offset="50">

<?php
	$lnkUploadImage = URL::base().'index.php/create/new';
?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </a><a class="brand" href="<?php echo URL::base().'index.php/home';?>">ImgTag</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li><a href="<?php echo $lnkUploadImage;?>">Upload Image</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="page-header">
	</div>
	<div class="row">
	</div>
	
	<div class="row">
		<div class="span10">
			<?php if( isset($error_message)){ ?>
				<div class="alert alert-error">
					<a class="close">×</a>
					<strong>Error</strong> <?php echo $error_message; ?>
				</div>
			<?php } ?>
			<div id="formContainer">
				<form id="upload-form" action="<?php echo URL::site('create/upload') ?>" method="post" enctype="multipart/form-data">
					<p>Choose file:</p>
					<p><input type="file" name="avatar" id="avatar" /></p>
					<p><input type="submit" name="submit" id="submit" value="Upload" /></p>
				</form>
			</div>
		</div>
  </div>
</div><?php //End of container ?>
</body>
</html>
</html>
