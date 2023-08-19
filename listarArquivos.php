<?php
$path = "imagens/";
$diretorio = dir($path);

echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();

        
    $arquiv = file("edita.txt");
        //localizar um termo especifico em um array
    //$pesq = array_search(substr($codigo . "  " . $nome . str_repeat(' ' , 80),0,78) .",\n", $arquiv);

    $achei = in_array(substr(1 . "  " . 'Aderbal de Oliveira Yamamoto' . str_repeat(' ' , 80),0,78) .",\n", $arquiv);
    $atual = substr(1 . "  " . 'Aderbal de Oliveira Yamamoto' . str_repeat(' ' , 80),0,78) .",\n";
    //echo sizeof($arquiv);
    var_dump($arquiv);
    $arq1 = explode("  ", $arquiv[0]);
    var_dump($arq1);
    echo count($arquiv);
    echo strlen($atual);
    $agota = explode("  ", $atual);
    
    var_dump( $agota);
    exit;
    
        
          


?>