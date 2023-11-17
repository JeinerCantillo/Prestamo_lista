<?php
    include "../app/prestamos_lista-services.php";
    $objAPI = new usuarioAPI();

    $method = $_SERVER['REQUEST_METHOD'];
    header("Content-Type: Application/json");
    switch ($method) {
        case 'GET':
            $objAPI->getAllprestamo();                        
            break;

        case 'POST':
            $objAPI->saveuprestamo();
            break;

        case 'PUT':
            $objAPI->updateprestamo();
            break;

        case 'DELETE':
            $objAPI->deleteprestamo();
            break;

        
        default:
            $objAPI->nullRequest();
            break;
    }    
?>