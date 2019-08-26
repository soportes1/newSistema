<?php 

class Model_SubirVideos extends CI_Model {

	public function SubirVideos()
	{
		echo "Hola ";
                $newFile = 'uploads/'.$_FILES['archivo']['name']; 
                $subio = false;

                if(move_uploaded_file($_FILES['archivo']['tmp_name'], $newFile)){
                	$subio = true;
                }

                if($subio) {
                	echo "El archivo subio con exito";
                } else {
                	echo "El archivo no cumple con las reglas establecidas";
                }  
            }
        }

