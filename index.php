<?php
    include_once "classe/Edit.php";
    $edit = new Edit(); 


?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>
            Cadastro
        </title>
    </head>
    <body class ="ml-2 mr-2">
                
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Incluir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formArq.php">Anexar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="listarArquivos.php">Listar Arquivos</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h1 class="mt-3 ml-5"> Cadastro </h1>




        <table>
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

        
    </body>
    </html>
    