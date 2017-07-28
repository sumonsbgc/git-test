<?php
include_once('../vendor/autoload.php');
use App\Model\Model;

if ( 'GET' == $_SERVER['REQUEST_METHOD']){
    if ( !empty($_GET['id'] )){
        $id = $_GET['id'];
        $model = new Model();
        $data = $model->delete($id);
        header("Location: index.php");
    }
}
?>