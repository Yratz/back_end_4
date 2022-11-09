<?php
require_once('db_controler.php');
// Определяем метод запроса
$method = $_SERVER['REQUEST_METHOD'];
// Получение строки запроса
$url = $_SERVER['REQUEST_URI'];
// Анализ и формирование структуры для дальнейшей обработки
$url_data = parse_url($url);
// На основе метода запускаем функциональность
switch ($method){
    case 'PUT':
        createUser($url_data);
        break;
    case 'GET':
        getUser($url_data);
        break;
    case 'POST':
        updateUser($url_data);
        break;
    case 'DELETE':
        deleteUser($url_data);
        break;
    default:
    ;
}

function createUser($data){
    $db = new DataBase();
    $successCreated = $db->createUser($data);
    if(isset($successCreated)){
    }
        else{
        header("{$_SERVER['SERVER_PROTOCOL']} 400 Bad Re-
        quest");
    echo json_encode(array(
    'error' => 'Bad Request'));
        } 
}

    function getUser($data) {
        $db = new DataBase();
        $successGet = $db->getUser($data);
        if(isset($successGet)){
            echo json_encode($successGet,JSON_UNESCAPED_UNICODE);
            }
            else{
                header("{$_SERVER['SERVER_PROTOCOL']} 400 Bad Re-
                quest");
            echo json_encode(array(
            'error' => 'Bad Request'));
    }
}

    function deleteUser($data) {
        $db = new DataBase();
        $successDelete = $db->deleteUser($data);
        if(isset($successDelete)){
            } else{
            header("{$_SERVER['SERVER_PROTOCOL']} 400 Bad Re-
            quest");
        echo json_encode(array(
        'error' => 'Bad Request'));
            }
    }

    function updateUser($data) {
        $db = new DataBase();
        $successUpddate = $db->updateUser($data);
        if(isset($successUpddate)){
            } else{
            header("{$_SERVER['SERVER_PROTOCOL']} 400 Bad Re-
            quest");
        echo json_encode(array(
        'error' => 'Bad Request'));
            }
    }


?>