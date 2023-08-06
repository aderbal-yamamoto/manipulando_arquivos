<?php

class Edit 
{

    public function gravar($nome){
        $nome = isset($_POST['nome']) ? $_POST['nome'] : NULL;
        $codigo = '';

        if(!is_null($nome)){
            $registro = file("edita.txt");
            $quanti = count($registro);
            $codigo = $quanti +1;



            $inclui = substr($codigo . "  " . $nome . str_repeat(' ' , 80),0,78) .",\n"; 
            $arquivo = file("edita.txt");
            $ultimo = end($arquivo);
            $ultimachave = key($arquivo);
            $ultimachave += 1;
            $arquivo[$ultimachave] = $inclui;
            var_dump($arquivo);
            file_put_contents("edita.txt", $arquivo);

            header('Location:index.php');
        }

    }

    public function editar($codigo, $nome, $novoNome){
        
        $arquiv = file("edita.txt");
            
            $ar = $codigo-1;
            $arquiv[$ar] = substr($codigo . "  " . $novoNome . str_repeat(' ' , 80),0,78) .",\n";
            file_put_contents("edita.txt", $arquiv);
            header('Location:index.php');
       
    }

    public function listar(){
        $arquivo = file('edita.txt');    
        //var_dump($arquivo);


        foreach ($arquivo as $valor){
            $num = explode("  ",  $valor);
            //var_dump($num);
            $codigo =  $num[0];
            //echo $codigo;
            $nome = $num[1];
            //echo $nome;  
            if(!empty($codigo)){
                echo '<tr>';

		        echo "<td> <a href=\"form.php?codigo={$codigo}&nome={$nome}\">
		        {$codigo}</a></td>";
		
		        echo "<td>{$nome}</td>"; 
		
		        echo "<td><a href=\"apagar.php?codigo={$codigo}&nome={$nome}\">
		        Excluir</a></td>";

		        echo '</tr>';
            }

        }
    } 

    public function apagar($codigo, $nome){
       
        $arquiv = file("edita.txt");
        print_r($arquiv);
        $pesq = array_search(substr($codigo . "  " . $nome . str_repeat(' ' , 80),0,78) .",\n", $arquiv);
        var_dump($pesq);
        // linha onde se encontra o termo da pesquisa no array. 
        echo $pesq;

        if($pesq == 0){
            echo 'Nome não encontrado';
        } else {
            
            unset($arquiv[$pesq]);
            
            file_put_contents("edita.txt", $arquiv);
            header('Location:index.php');
        }
    }
}
