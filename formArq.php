<?php
require_once "classe/Upload.php";


if(isset($_FILES)){
    
    $fil = isset($_FILES["arquivo"]) ? $_FILES : NULL;
    if(!is_null($fil)){
    $file = $fil['arquivo'];
    $arq = new Upload();
    $arq->uploadFiles($file);
    }
}
?>


<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Envio de arquivo</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      Selecione o arquivo: <input type="file" name="arquivo" />
      <input type="submit" value="Enviar"/>
      
    </form>
  </body>
</html>