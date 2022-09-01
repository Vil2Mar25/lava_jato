<?php

class Curl {

    private $endereco_ws = "http://viacep.com.br/ws";
    private $url_ws;

    public function consulta($cep){

        $this->url_ws = $this->endereco_ws . '/' . $cep . '/json/';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url_ws);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = curl_exec($ch);

        if(curl_error($ch)) {
            echo 'Erro:' .curl_error($ch);
            return false;
        }
        return $resultado;

        curl_close($ch);
    }
}