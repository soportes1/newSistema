<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="rec/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="rec/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="rec/css/styles.css">
	<link rel="stylesheet" type="text/css" href="rec/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--<link rel="stylesheet" type="text/css" href="rec/css/util.css">-->
	<link rel="stylesheet" type="text/css" href="rec/css/main.css">
	<link rel="stylesheet" type="text/css" href="rec/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="rec/css/style.css">
	<script src="rec/js/jquery-3.3.1.min.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
  $("#Buscar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mySearch tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
	<body>
