<?php 


class Upload{

    public $dir = "imagens/"; 
    
    
    public function uploadFiles($file){

       
       
      $arq =  move_uploaded_file($file["tmp_name"], "$this->dir".$file["name"]);
      
      if ($arq == true ) {
        echo "arquivo enviado com sucesso";
      }
      else{
        echo "erro ao enviar o arquivo";
      }


    }

    public function mostrarPdf($file){
    
        $arq = explode("/", $file);
        $filename = $arq[1];
        
	
	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="' .$filename. '"');
	header('Content-Transfer-Encoding; binary');
	header('Accept-Ranges; bytes');
	readfile($file);
        
    }

    public function apagarPdf($file){
        
        $arq = unlink($file);
    }
}

?>

