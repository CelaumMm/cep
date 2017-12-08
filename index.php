<?php 
    function get_endereco($cep){
        // formatar o cep removendo caracteres não numericos
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";

        $xml = simplexml_load_file($url);
        return $xml;
    }

    echo '<pre>';
    print_r(get_endereco("01246-903"));
    echo '</pre>';
?>