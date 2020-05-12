<?php

$action = "";

if(isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
}

switch($action) {

    case 'search':
        header('Content-Type: application/json');
        $search = $_REQUEST['key'];
        $data = json_decode(file_get_contents(__DIR__ . '/fixture/users.json') , true);
        $result = [];
        foreach($data as  $el) {
            foreach($el as $key => $value) {
                if($value == $search) {
                   array_push($result , $el);
                }
            }
        }
        
        echo json_encode($result);
        
        die();
    break;
    
    case 'get':
        header('Content-Type: application/json');
        $id = $_REQUEST['id'];
        $data = json_decode(file_get_contents(__DIR__ . '/fixture/users.json'));
        if(array_key_exists($id, $data)) {
            echo json_encode($data[$id]);
        } else {
            header("HTTP/1.0 404 Not Found", 404);
        }
        
        die();
    break;
    case '' :
        header('Content-Type: application/json');
        echo file_get_contents(__DIR__ . '/fixture/users.json');
        die();
    break;
    default:
        header("HTTP/1.0 400 Bad request", 400);
        die();
    break;
}