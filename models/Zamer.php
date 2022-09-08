<?php
namespace models;
use core\Model;

class Zamer extends Model
{
    public function saveZamer($name, $email, $message, $phone, $address){
        $params = ['name' => $name, 'email'=>$email, 'message'=>$message, 'phone'=>$phone , 'address'=>$address];

        $result = $this->db->insert("INSERT INTO zamer (name, email, message, phone, address) VALUES (:name, :email, :message, :phone, :address) ", $params);

        return $result;
    }
}