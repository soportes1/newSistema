<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Drop and Drag</title>
        <style>
    .content{
        width: 50%;
        padding: 5px;
        margin: 0 auto;
    }
    .content span{
        width: 250px;
    }
    .dz-message{
        text-align: center;
        font-size: 28px;
    }
    </style>
    <script>
        // Add restrictions
        Dropzone.options.fileupload = {
            acceptedFiles: 'image/*',
            maxFilesize: 1 // MB
        };
    </script>
</head>
<body>

    <div class='content'>
        <form action="<?= base_url('index.php/User/fileupload') ?>" class="dropzone" id='fileupload'>
        </form> 
    </div> 
    
</body>
</html>
