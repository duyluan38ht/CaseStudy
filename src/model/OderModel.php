<?php


namespace App\model;


class OderModel
{
    public $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }

    public function getAllOrder()
    {
        $query = "SELECT * FROM orders";
        $stmt = $this->database->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arrOrder = [];
        foreach ($result as $value) {
            $order = new Orders($value['staffCode'], $value['roomCode'], $value['dayin'], $value['dayout'], $value['buyPrice']);
            $order->setOrderCode($value['orderCode']);
            array_push($arrOrder, $order);
        }
        return $arrOrder;
    }

    public function getById($_orderCode)
    {
        $query = "SELECT * FROM orders where orderCode=:orderCode";
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':orderCode', $_orderCode);
        $stmt->execute();
        $result = $stmt->fetch();
        $order = new Orders($result['staffCode'], $result['roomCode'], $result['dayin'], $result['dayout'], $result['buyPrice']);
        return $order;
    }

    public function checkRoom($oder, $orderCode)
    {
        $query = "UPDATE orders SET staffCode=:staffCode,roomCode=:roomCode,dayin=:dayin,dayout=:dayout,buyPrice=:buyPrice WHERE orderCode=:orderCode";
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':staffCode',$oder->getStaffCode());
        $stmt->bindParam(':roomCode',$oder->getRoomCode());
        $stmt->bindParam(':dayin',$oder->getDayIn());
        $stmt->bindParam(':dayout',$oder->getDayOut());
        $stmt->bindParam(':buyPrice',$oder->getPrice());
        $stmt->bindParam('orderCode',$orderCode);
        $stmt->execute();



    }
}