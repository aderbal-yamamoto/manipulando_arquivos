<?php 


class Upload{

    public $dir = "imagens/"; 
    
    
    public function uploadFiles($file){

             
      $arq =  move_uploaded_file($file["tmp_name"], "$this->dir".$file["name"]);
      
      if ($arq == true ) {
        
         echo "<div class=\"alert alert-primary\" role=\"alert\">
                  Arquivo enviado com sucesso
               </div>";
      }
      else{
        echo "<div class=\"alert alert-danger\" role=\"alert\">
                      Erro ao enviar o arquivo!
              </div>"; 
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

