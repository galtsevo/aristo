<?php
namespace models;
use core\Model;

class Feedback extends Model
{
    public function saveFeedback($name, $email, $message, $visible, $type=''){
        $params = ['name' => $name, 'email'=>$email, 'message'=>$message, 'visible'=>$visible, 'time' => time(), 'type' => $type];

        $result = $this->db->insert("INSERT INTO feedback (name, email, message, visible, timecreate, type) VALUES (:name, :email, :message, :visible, :time, :type) ", $params);

        return $result;
    }

    public function getFeedback($visible, $type){
        $params = ['visible'=>$visible, 'type'=>$type];

        $result = $this->db->row("SELECT * FROM feedback WHERE visible in(:visible) and type=:type order by id desc LIMIT 10", $params);
//        debug($result);
        return $result;
    }
}