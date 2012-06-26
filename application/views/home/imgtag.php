<html>
	<head>
		<title>ImgTag - Home</title>
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
	$lnkUploadImage = URL::base().'create/new';
?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </a><a class="brand" href="<?php echo URL::base().'home';?>">ImgTag</a>
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
		<?php //ImageTag > Tag > TagName ?>
	</div>
	
	<div class="row">
    <div class="span2">
      <div class="well">
		<h3>Tags</h3>
		<?php
			foreach($imgTags as $tag)
			{
				echo '<a href="#" class="clsTag">'.$tag['tagDesc'].'</a><br />';
			}
		?>        
      </div>
    </div>
	  
    <div class="span10">
		<div id="galleryContainer">
		</div>
    </div>
  </div>
</div><?php //End of container ?>
			
<script>
$().ready(function(){
	$('.clsTag').click(function(){
		$('.clsTag').removeClass('activeTag');
		$('#galleryContainer').html('<h3>Loading...</h3>');
		
		$.ajax({
			url: '<?php echo URL::site('home/getGallerybyTag') ?>',
			cache: false,
			data: {"tags": $.trim($(this).text())},
			dataType: "json",
			success: function(data){
				var gallery = "";
				$.each(data, function(key, value) { 
					gallery += "<a href='<?php echo URL::base().'Create/tags/?nm=';?>"+value.imageUrl+"'><img class='homeImg' src='<?php echo URL::base();?>user_images/" + value.imageUrl + "' /></a>"
				});
				$('#galleryContainer').empty();
				$('#galleryContainer').html(gallery);
			},
			error: function(e, xhr){
				alert('error');
			}
		});
		
		$(this).addClass('activeTag');
		return false;
	});<?php //clsTag click handler ?>
});
</script>

</body>
</html>
</html>