<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>rec/fonts/style.css">
<script type="text/javascript" src="<?php echo base_url();?>rec/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>rec/js/formato.js"></script>
-->
<h1>Subir un archivo</h1>
<fieldset style="width: 100px;">
	<br>
	<form action="subir_video_controller/SubirVideo" method="post" enctype="multipart/form-data">
		<input type="file" name="archivo"/>
		<br></br>
		<input type="submit" value="Subir"/>
	</form>
</fieldset>