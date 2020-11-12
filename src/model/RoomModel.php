<?php


namespace App\model;


class RoomModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }

    public function getAllRoom()
    {
        $query = "SELECT * FROM rooms";
        $stmt = $this->database->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arrRoom = [];
        foreach ($result as $value) {
            $room = new Rooms($value['roomName'], $value['roomType'], $value['roomPrice'], $value['staffCode'], $value['serviceCode'], $value['status'], $value['dayIn'],$value['note'],$value['customerName'],$value['CMND']);
            $room->setRoomCode($value['roomCode']);
            array_push($arrRoom, $room);
        }
        return $arrRoom;
    }
    public function getById($_roomCode){
        $query = "SELECT * FROM rooms where roomCode=:roomCode";
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':roomCode',$_roomCode);
        $stmt->execute();
        $result = $stmt->fetch();
        $room = new Rooms($result['roomName'],$result['roomType'],$result['roomPrice'],$result['staffCode'],$result['serviceCode'],$result['status'],$result['dayIn'],$result['note'],$result['customerName'],$result['CMND']);
        $room->setRoomCode($result['roomCode']);
        return $room;
    }
    public function bookRoom($room,$_roomCode){
        $query = "UPDATE rooms SET roomName=:roomName,roomType=:roomType,roomPrice=:roomPrice,staffCode=:staffCode,serviceCode=:serviceCode,status=:status,dayIn=:dayIn,note=:note,customerName=:customerName,CMND=:CMND where roomCode=:roomCode";
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':roomName',$room->getRoomName());
        $stmt->bindParam(':roomType',$room->getRoomType());
        $stmt->bindParam(':roomPrice',$room->getRoomPrice());
        $stmt->bindParam(':staffCode',$room->getStaffCode());
        $stmt->bindParam(':serviceCode',$room->getServiceCode());
        $stmt->bindParam(':status',$room->getStatus());
        $stmt->bindParam(':dayIn',$room->getDayIn());
        $stmt->bindParam(':note',$room->getNote());
        $stmt->bindParam(':customerName',$room->getCustomerName());
        $stmt->bindParam(':CMND',$room->getCMND());
        $stmt->bindParam(':roomCode',$_roomCode);
        $stmt->execute();

    }
    public function delete($id){
        $sql = "UPDATE rooms SET customerName=NULL,CMND=NULL,dayIn=NULL,status='Trống',note=NULL where roomCode=:id";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }


}