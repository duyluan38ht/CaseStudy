<?php

namespace App\controller;

use App\model\RoomModel;
use App\model\Rooms;

class ControllerRoom
{
    protected $controllerRoom;

    public function __construct()
    {
        $this->controllerRoom = new RoomModel();
    }

    public function showRoom()
    {
        $room = $this->controllerRoom->getAllRoom();
        include_once "src/view/index.php";

    }

    public function bookRoom()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_GET['id'];
            $room = $this->controllerRoom->getById($id);

            include_once "src/view/bookRoom.php";
        } else {
            $roomCode = $_GET['id'];
            $roomName = $_REQUEST['roomName'];
            $roomType = $_REQUEST['roomType'];
            $roomPrice = $_REQUEST['roomPrice'];
            $staffCode = $_REQUEST['staffCode'];
            $serviceCode = $_REQUEST['serviceCode'];
            $status = $_REQUEST['status'];
            $dayIn=$_REQUEST['dayIn'];
            $note=$_REQUEST['note'];
            $customerName=$_REQUEST['customerName'];
            $CMND=$_REQUEST['CMND'];
            $room = new Rooms($roomName, $roomType, $roomPrice, $staffCode, $serviceCode, $status,$dayIn,$note,$customerName,$CMND);

            $this->controllerRoom->bookRoom($room, $roomCode);
            header('location:index.php');
        }

    }
    public function delete(){
        $id=$_REQUEST['id'];
        $this->controllerRoom->delete($id);
        header('location:index.php');
    }



}