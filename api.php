<?php

function buscarCEP($cep) {
    if(strlen($cep) === 8 ) {
        //Verificar se o CEP tem 8 caracteres

        $dados = json_decode(file_get_contents(
        "viacep.com.br/ws/01001000/json/"),true);

        
        
            return $dados;
        }
    }

?>