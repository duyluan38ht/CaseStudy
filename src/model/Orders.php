<?php


namespace App\model;


class Orders
{
    public $orderCode;
    public $staffCode;
    public $roomCode;
    public $dayIn;
    public $dayOut;
    public $buyPrice;

    /**
     * Oders constructor.
     * @param $orderCode
     * @param $staffCode
     * @param $roomCode
     * @param $dayIn
     * @param $dayOut
     * @param $buyPrice
     */
    public function __construct($staffCode, $roomCode, $dayIn, $dayOut, $buyPrice)
    {
        $this->staffCode = $staffCode;
        $this->roomCode = $roomCode;
        $this->dayIn = $dayIn;
        $this->dayOut = $dayOut;
        $this->buyPrice = $buyPrice;
    }

    /**
     * @return mixed
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }

    /**
     * @param mixed $orderCode
     */
    public function setOrderCode($orderCode): void
    {
        $this->orderCode = $orderCode;
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
    public function setStaffCode($staffCode): void
    {
        $this->staffCode = $staffCode;
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
    public function setRoomCode($roomCode): void
    {
        $this->roomCode = $roomCode;
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
    public function setDayIn($dayIn): void
    {
        $this->dayIn = $dayIn;
    }

    /**
     * @return mixed
     */
    public function getDayOut()
    {
        return $this->dayOut;
    }

    /**
     * @param mixed $dayOut
     */
    public function setDayOut($dayOut): void
    {
        $this->dayOut = $dayOut;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * @param mixed $buyPrice
     */
    public function setBuyPrice($buyPrice): void
    {
        $this->buyPrice = $buyPrice;
    }


}