<!DOCTYPE html>
<html>
<head>
	<title>prueba</title>
</head>
<body>
	<div id="fileuploader">Upload</div>
	<script>
		$(document).ready(function()
		{
			$("#fileuploader").uploadFile({
			url:"newSistema/application/views/upload.php",
			acceptedFiles:"mp4",
			fileName:"myfile"
			});
		});
</script>





</body>
</html>