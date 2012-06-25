<html>
	<head>
		<title>Define Image Tags</title>
		<?php
			echo HTML::script('assets/js/jquery-1.7.2.min.js');
			echo HTML::script('assets/js/jquery-ui.1.8.20.min.js'); 
			echo HTML::script('assets/js/tagit.js'); 
		
			echo HTML::style('assets/css/jquery-ui-base-1.8.20.css');
			echo HTML::style('assets/css/tagit-stylish-yellow.css');
		?>
	</head>
	<html>
		<body>
<h4>Set tags  now</h4>
<?php
	$fname = null;
	if(isset($_GET['nm']))
		$fname = $_GET['nm'];
?>
<!-- <form id="upload-form" action="<?php echo URL::site('create/tags') ?>" method="post"> -->
	<img src="<?php echo '../../../user_images/'.$fname; ?>" />
	<input type="hidden" name="imgFileNm" id="imgFileNm" value="<?php echo $fname; ?>" />
	
	<ul id="demo1" name="nameOfSelect[]" class="tagit ui-sortable">
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
	
				$('#demo1').tagit({tagSource:availableTags, select:true, sortable:true});
				
				$('#btnSaveTags').click(function () {
					//console.log($('#demo1').tagit('tags'))
					var multipleValues = $(".tagit-hiddenSelect").val() || [];
					//console.log(multipleValues);
					//console.log(multipleValues.join(","));
					$.post('<?php echo URL::site('create/savetags') ?>',
						   {"tags": multipleValues.join(", "),
						    "imageFileNm" : $('#imgFileNm').val()}
						   ,function(data) {
							 $('.result').html(data);
					});
					return false;
				});
		})
	</script>
<!-- </form>			-->
		</body>
	</html>
</html>