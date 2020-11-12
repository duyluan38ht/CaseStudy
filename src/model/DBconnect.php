<?php
namespace App\model;
use PDO;
class DBconnect
{
    protected $dsn;
    protected $user;
    protected $password;
    public function __construct()
    {
        $this->dsn='mysql:host=localhost;dbname=hotel_manager';
        $this->user='root';
        $this->password='123456@Abc';
    }
    public function connect(){
        return new PDO($this->dsn,$this->user,$this->password);
    }

}