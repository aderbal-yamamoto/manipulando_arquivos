<?php

class Edit 
{

    public function gravar($nome){
        $nome = isset($_POST['nome']) ? $_POST['nome'] : NULL;
        $codigo = '';

        if(!is_null($nome)){
            
            $registro = file("edita.txt");
            
            // Localizar o ultimo item do array
            $quanti = end($registro);
            var_dump($quanti);
            // Separar os espaços vazios do array para retirar do registro o código do item  
            $at = explode("  ", $quanti);
            //O registro onde se encontra o codigo adiciona -se mais um para informar que esse será o proximo item do array
            //Erro que aparece no 1 item a ser incluido
            if($at[0]==''){
             
                $at[0] = 0;

            } 

            $codigo = $at[0]+1;

            
            // Formatação do item a ser incluido no txt 
            $inclui = substr($codigo . "  " . $nome . str_repeat(' ' , 80),0,78) .",\n"; 
            
            //  Localizar o array key onde vai ser incluido o item novo
            $arquivo = file("edita.txt");
            $ultimo = end($arquivo);
            $ultimachave = key($arquivo);
            $ultimachave += 1;

            // Colocar o array key e seu valor no array   
            $arquivo[$ultimachave] = $inclui;
            //var_dump($arquivo);

            // Finalmente editar o txt 
            file_put_contents("edita.txt", $arquivo);

            header('Location:index.php');
        }

    }

    public function editar($codigo, $nome, $novoNome){
        
        $arquiv = file("edita.txt");
            //localizar um termo especifico em um array
        $pesq = array_search(substr($codigo . "  " . $nome . str_repeat(' ' , 80),0,78) .",\n", $arquiv);
        echo $pesq;
        
        $count = count($arquiv);

        
        if($pesq == 0 && $count == 0){
            echo 'Nome não encontrado';
        } else {
            
            echo $arquiv[$pesq];
            $arquiv[$pesq] =  substr($codigo . "  " . $novoNome . str_repeat(' ' , 80),0,78) .",\n";
            
            file_put_contents("edita.txt", $arquiv);
            header('Location:index.php');
        }
            
              
    }
    /*   
            Criar classe para está função e assim reduzir seu acoplamento, 
       pois está classe utiliza metodos tanto da classe edit como da classe Upload 
       está pode ser uma classe control. 
   */
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

		        echo "<td> <a href=\"form.php?codigo={$codigo}&nome={$nome}\" >
		        {$codigo}</a></td>";
		
		        echo "<td>{$nome}</td>"; 
		
		        echo "<td><a href=\"apagar.php?codigo={$codigo}&nome={$nome}\"  class=\"btn btn-danger ml-3 mr-5\" >
		        Excluir</a></td>";  

                echo "<td><a href=\"exibirPdf.php?nome={$nome}\" class=\"btn btn-success\">
		        PDF</a></td>";

		        echo '</tr>';
            } 
        }
    } 

    public function apagar($codigo, $nome){
       
        $arquiv = file("edita.txt");
        print_r($arquiv);
        $pesq = array_search(substr($codigo . "  " . $nome . str_repeat(' ' , 80),0,78) .",\n", $arquiv);
        var_dump($arquiv);
        // linha onde se encontra o termo da pesquisa no array. 
        echo $pesq;
        //verificar se é o ultimo item do array
        $count = count($arquiv);
        var_dump($count);

        if($pesq == 0 && $count == 0){
            echo 'Nome não encontrado';
        } else {
            
            unset($arquiv[$pesq]);
            
            file_put_contents("edita.txt", $arquiv);
            header('Location:index.php');
        }
    }
}
