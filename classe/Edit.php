<?php

class Edit 
{

    public function gravar($nome){
        
        
        $inclui = substr($nome . str_repeat(' ' , 80),0,78) .",\n"; 
        $arquivo = file("edita.txt");
        $ultimo = end($arquivo);
        $ultimachave = key($arquivo);
        $ultimachave += 1;
        $arquivo[$ultimachave] = $inclui;
        var_dump($arquivo);
        file_put_contents("edita.txt", $arquivo);

    }

    public function editar($nome, $novoNome){
        
        $arquiv = file("edita.txt");
        //$nome = "sheila"; //nome a ser localizado
        $pesq = array_search(substr($nome . str_repeat(' ' , 80),0,78) .",\n", $arquiv);
        var_dump($pesq);
        // linha onde se encontra o termo da pesquisa no array. 
        echo $pesq;
        if($pesq == 0){
            
            echo 'Nome não encontrado';
        
        } else {
        
            //$novoNome = "takeski";
            $arquiv[$pesq] = substr($novoNome . str_repeat(' ' , 80),0,78) .",\n";
            var_dump($arquiv);
            file_put_contents("edita.txt", $arquiv);

        }
    }
}
