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
    case 'GET':
        getAchivment($url_data);
        break;
    default:
    ;
}

    function getAchivment($data) {
        $db = new DataBase();
        $successGet = $db->getAchivment($data);
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


?>