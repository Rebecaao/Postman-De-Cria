<?php
//import do arquivo autoload, que fara as instancias do slim
    require_once('vendor/autoload.php');

    //criando um objeto slim chamado app, para configurar os EndPoints
    $app = new \Slim\App();

    //EndPoint: Requisição para listar todos os contatos
    $app->get('/contatos', functions($request, $response, $argc){
        $response->write('Testando a API pelo GET');
    });

    $app->get('/contatos/{id}', functions($request, $response, $argc){

    });

    $app->post('/contatos', functions($request, $response, $argc){

    });
?>