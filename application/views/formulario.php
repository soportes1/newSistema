<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>rec/fonts/style.css">
<script type="text/javascript" src="<?php echo base_url();?>rec/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>rec/js/formato.js"></script>
-->
<h3>Subir un archivo</h3>
<fieldset style="width: 100px;">
	<br>
	<form action="formulario_controller/SubirVideo" method="post" enctype="multipart/form-data">
		<input type="file" name="archivo"/>
		<br></br>
		<input type="submit" value="Subir"/>
	</form>
</fieldset>


<!--
<div class=" ">
<form action="formulario_controller/SubirVideo" method="post" enctype="multipart/form-data" class="dropzone">
</form>
</div>



<div class="container">
	<div class="row">
	   <div class="col-md-6">
	      <form method="post" action="#" id="#">
              <div class="form-group files color">
               <label>Sube un archivo </label>
                <input type="file" class="form-control" multiple="">
              </div>
          </form>
	  </div>
	</div>
</div-->

<h3>prueba</h3>
    <div class="container">
        <div class="row">
            <div id="content" class="col-lg-12">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                    <div id="actions" class="row">
                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Añadir imágenes...</span>
                            </span>
                            <button type="submit" class="btn btn-primary start" style="display: none;">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start upload</span>
                            </button>
                            <button type="reset" class="btn btn-warning cancel" style="display: none;">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel upload</span>
                            </button>
                        </div>

                        <div class="col-lg-5">
                            <!-- The global file processing state -->
                            <span class="fileupload-process">
                                <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="table table-striped files" id="previews">
                        <div id="template" class="file-row row">
                            <!-- This is used as the file preview template -->
                            <div class="col-xs-12 col-lg-3">
                                <span class="preview" style="width:160px;height:160px;">
                                    <img data-dz-thumbnail />
                                </span>
                                <br/>
                                <button class="btn btn-primary start" style="display:none;">
                                    <i class="glyphicon glyphicon-upload"></i>
                                    <span>Empezar</span>
                                </button>
                                <button data-dz-remove class="btn btn-warning cancel">
                                    <i class="icon-ban-circle fa fa-ban-circle"></i> 
                                    <span>Cancelar</span>
                                </button>
                                <button data-dz-remove class="btn btn-danger delete">
                                    <i class="icon-trash fa fa-trash"></i> 
                                    <span>Eliminar</span>
                                </button>
                            </div>
                            <div class="col-xs-12 col-lg-9">
                                <p class="name" data-dz-name></p>
                                <p class="size" data-dz-size></p>
                                <div>
                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                </div>
                                <div>
                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                      <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dropzone-here">Drop files here to upload.</div>
              </form>  
          </div>
      </div>
</div>

<script>
// Get the template HTML and remove it from the doument
var previewNode = document.querySelector("#template");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(document.body, {
    url: "upload.php",
    paramName: "file",
    acceptedFiles: 'image/*',
    maxFilesize: 2,
    maxFiles: 3,
    thumbnailWidth: 160,
    thumbnailHeight: 160,
    thumbnailMethod: 'contain',
    previewTemplate: previewTemplate,
    autoQueue: true,
    previewsContainer: "#previews",
    clickable: ".fileinput-button"
});

myDropzone.on("addedfile", function(file) {
    $('.dropzone-here').hide();
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
});
// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
});

myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
});

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
    //document.querySelector("#total-progress").style.opacity = "0";
});

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
};

$('#previews').sortable({
    items:'.file-row',
    cursor: 'move',
    opacity: 0.5,
    containment: "parent",
    distance: 20,
    tolerance: 'pointer',
    update: function(e, ui){
        //actions when sorting
    }
});
</script>