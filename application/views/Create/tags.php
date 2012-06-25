<html>
	<head>
		<title>ImgTag - Set Image Tags</title>
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
			
			<div class="alert alert-success" id="popSuccess" style="display:none">
				<a class="close">×</a>
				<strong>Success</strong> Tags successfully added.
			</div>
			
			
			<div id="formContainer">
				<h2>Set Image Tags</h2>
				<?php
					$fname = null;
					if(isset($_GET['nm']))
						$fname = $_GET['nm'];
				?>
				<img class="createTagImg" src="<?php echo '../../../user_images/'.$fname; ?>" />
				<input type="hidden" name="imgFileNm" id="imgFileNm" value="<?php echo $fname; ?>" />
				
				<ul id="tagsCtl" name="nameOfSelect[]" class="tagit ui-sortable" style="margin-left: -1px">
				</ul>
			
				<input type="submit" id="btnSaveTags" value="Save Tags" />
				
				
			
<script>
$().ready(function(){
	var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"Scheme"
	];
	getExistingTagForImage();
	
	$('#tagsCtl').tagit({tagSource:availableTags, select:true, sortable:true});
	
	$('#btnSaveTags').click(function () {
		$('#popSuccess').hide();
		var multipleValues = $(".tagit-hiddenSelect").val() || [];
		$.post('<?php echo URL::site('create/savetags') ?>',
			   {"tags": multipleValues.join(", "),
				"imageFileNm" : $('#imgFileNm').val()}
			   ,function(data) {
				 if(data == 'success')
				 {
					$('#popSuccess').show();
				 }
		});
		return false;
	});
	
	function getExistingTagForImage()
	{
		$.ajax({
			url: '<?php echo URL::site('create/getTagsForImage') ?>',
			cache: false,
			data: {"imageFileNm": $.trim($('#imgFileNm').val())},
			dataType: "json",
			success: function(data){
				var str = "";
				$.each(data, function(key, value) {
					str += '<li class="tagit-choice">'+ value.tagDesc +'<a class="tagit-close">x</a></li>'
				});
				$('#tagsCtl .tagit-new').before(str);
			},
			error: function(e, xhr){
				console.log('error');
			}
		});
		
	}
})
</script>
				
			</div>
		</div>
  </div>
</div><?php //End of container ?>
</body>
</html>
