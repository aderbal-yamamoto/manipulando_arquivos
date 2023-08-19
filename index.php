<?php
    include_once "classe/Edit.php";
    $edit = new Edit(); 


?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Cadastro</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">

   
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavAltMarkup" style="">
          <div class="navbar-nav">
           
            <a class="nav-link" href="form.php">Incluir</a>
            <a class="nav-link"  href="formArq.php">Anexar</a>
            <a class="nav-link " href="listarArquivos.php">Listar Arquivos</a>
            
          </div>
        </div>
      </div>
    </nav>
    
   
  <div class="card w-75 mt-4  col-md-6 offset-md-1  ">
  <div class="card-header ">
  <h1 class="text-center "> Registros </h1>
  </div>
  
    <div class="card-body content-center">
      
    
        
            <table class="table mt-3">
                <thead>
                    <tr class="table">
                        <th scope="col">Codigo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Ação</th>
                        <th scope="col">visualizar</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php $edit->listar(); ?>			
                    </tbody>
            </table>
    
   
            </div>
  </div>

    
        
        
    </body>
    </html>
    