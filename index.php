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
    <body class ="ml-5">
        <h1 class="mt-3 ml-5"> Cadastro </h1>
        <p> <a href="form.php" class="btn btn-outline-primary ml-5 mt-3">Incluir</a>
        <a href="formArq.php" class="btn btn-outline-secondary ml-4  mt-3">Anexar</a> </p>
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
    