<?php
/***********************
 * Objetivo: arquivo principal da api que irá receber a url requisitada e redirecionar para as APIs (router)
 * Data: 19/05/22
 * Autor: Rebecao
 * Version: 1.0
 *********************************************/

    //Permite ativar quais endereços de sites que poderao fazer requisições na API (* libera para todos os sites)
    header('Access-Contorl-Allow-Origin: *');

    //Permite ativar os metodos do protocolo HTTP que irão requisitar a API
    header('Access-Contorl-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

    //Permite ativar o content-type das requisições (Formato de dados que será utilizado (JSON, XML, FORM/DATA, etc))
    header('Access-Contorl-Allow-Header: Content-Type');

    //Permite liberar quais content-type serão utilizados na API
    header('Content-Type: application/json');

    //Recebe a URL digitada na requisição
    $urlHTTP = (string) $_GET['url'];

    //Converte a url requisitada em um array para dividir as opções  de busca, que é separada pela "/'
    $url = explode('/', $urlHTTP);

    //verifica qual a api sera encaminhada a requisicao (contatos,estados, etc)
    switch(strtoupper($url[0])){
        case'CONTATOS':
            require_once('contatosAPI/index.php');
            break;
        
        case'ESTADOS':
            require_once('estadosAPI/index.php');
            break;
        
    }
?>