<html>
	<head>
		<title>Base64 Image Encoder - iBacor</title>

		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="jquery.form.js"></script>
		<script type="text/javascript" >
			$(document).ready(function() { 
				$('#photoimg').live('change', function() { 
					$("#preview").html('');
					$("#preview").html('Uploading....');
					$("#imageform").ajaxForm({
						target: '#preview'
					}).submit();
				
				});
			}); 
		</script>

		<style>
			body {
				font-family:arial;
			}
			.preview {
				width:200px;
				border:solid 1px #dedede;
				padding:10px;
			}
			#preview {
				color:#cc0000;
				font-size:12px
			}
		</style>
	</head>

	<body>
		<a href='http://ibacor.com'>iBacor</a>
		<div style="width:600px">
			<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
				Upload image <input type="file" name="photoimg" id="photoimg" />
			</form>
			<div id='preview'></div>
		</div>
	</body>
</html>
