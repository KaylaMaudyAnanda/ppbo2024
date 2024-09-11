<?php
class Publisher
{
    public $name;
    public $address;
    public $phone;

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
}