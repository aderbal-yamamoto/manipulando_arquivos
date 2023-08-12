<?php
    include_once "classe/Edit.php";
    $edit = new Edit(); 


?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>
            Cadastro
        </title>
    </head>
    <body>
        <h1>Cadastro </h1>
        <p> <a href="form.php">Incluir</a>
        <a href="formArq.php">Anexar</a> </p>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Ação</th>
                    <th>visualizar</th>
                </tr>
            </thead>
            <tbody>
        <?php $edit->listar(); ?>			
            </tbody>
        </table>


    </body>
    </html>
    