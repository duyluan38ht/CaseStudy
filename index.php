<?php
session_start();
if (!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<?php

require __DIR__."/vendor/autoload.php";
$controllerRoom = new \App\controller\ControllerRoom();
$controllerOrder = new \App\controller\ControllerOder();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'bookRoom':
        $controllerRoom->bookRoom();
        break;
    case 'checkRoom':
        $controllerOrder->checkRoom();
        break;
    default:
        $controllerRoom->showRoom();
        break;
}


?>