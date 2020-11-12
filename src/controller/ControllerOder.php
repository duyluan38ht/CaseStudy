<?php


namespace App\controller;


use App\model\OderModel;
use App\model\Orders;

class ControllerOder
{
    public $controllerOder;

    public function __construct()
    {
        $this->controllerOder = new OderModel();
    }

    public function showOrder(){
        $order = $this->controllerOder->getAllOrder();
      include_once "src/view/checkRoom.php";

    }
    public function checkRoom()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_REQUEST['id'];
        $order = $this->controllerOder->getById($id);
        include_once "src/view/checkRoom.php";
    } else {
        $orderCode = $_REQUEST['id'];
        $staffCode = $_REQUEST['staffCode'];
        $roomCode = $_REQUEST['roomCode'];
        $dayIn = $_REQUEST['dayin'];
        $dayOut = $_REQUEST['dayout'];
        $buyPrice = $_REQUEST['buyPrice'];
        $order = new Orders($staffCode, $roomCode, $dayIn, $dayOut, $buyPrice);
        $this->controllerOder->checkRoom();
        header('location:index.php');


    }
}
}