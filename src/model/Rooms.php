<?php


namespace App\model;


class Rooms
{
    public $roomCode;
    protected $roomName;
    protected $roomType;
    protected $roomPrice;
    protected $staffCode;
    protected $serviceCode;
    protected $status;
    protected $dayIn;
    protected $note;
    protected $customerName;
    protected $CMND;

    /**
     * Rooms constructor.
     * @param $roomName
     * @param $roomType
     * @param $roomPrice
     * @param $staffCode
     * @param $serviceCode
     * @param $status
     * @param $dayIn
     * @param $note
     * @param $customerName
     * @param $CMND
     */
    public function __construct($roomName, $roomType, $roomPrice, $staffCode, $serviceCode, $status, $dayIn, $note, $customerName, $CMND)
    {
        $this->roomName = $roomName;
        $this->roomType = $roomType;
        $this->roomPrice = $roomPrice;
        $this->staffCode = $staffCode;
        $this->serviceCode = $serviceCode;
        $this->status = $status;
        $this->dayIn = $dayIn;
        $this->note = $note;
        $this->customerName = $customerName;
        $this->CMND = $CMND;
    }

    /**
     * @return mixed
     */
    public function getRoomCode()
    {
        return $this->roomCode;
    }

    /**
     * @param mixed $roomCode
     */
    public function setRoomCode($roomCode)
    {
        $this->roomCode = $roomCode;
    }

    /**
     * @return mixed
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * @param mixed $roomName
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getRoomPrice()
    {
        return $this->roomPrice;
    }

    /**
     * @param mixed $roomPrice
     */
    public function setRoomPrice($roomPrice)
    {
        $this->roomPrice = $roomPrice;
    }

    /**
     * @return mixed
     */
    public function getStaffCode()
    {
        return $this->staffCode;
    }

    /**
     * @param mixed $staffCode
     */
    public function setStaffCode($staffCode)
    {
        $this->staffCode = $staffCode;
    }

    /**
     * @return mixed
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param mixed $serviceCode
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDayIn()
    {
        return $this->dayIn;
    }

    /**
     * @param mixed $dayIn
     */
    public function setDayIn($dayIn)
    {
        $this->dayIn = $dayIn;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getCMND()
    {
        return $this->CMND;
    }

    /**
     * @param mixed $CMND
     */
    public function setCMND($CMND)
    {
        $this->CMND = $CMND;
    }
    


}