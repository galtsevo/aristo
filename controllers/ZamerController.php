<?php

namespace controllers;

use core\Controller;
use lib\Db;

class ZamerController extends Controller
{
    public function indexAction(){
        $vars = [];

        if(!empty($_POST)){
            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $message = $_POST['message'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $visible = 0;
        }
//debug($_POST);
        if(!empty($name) AND !empty($email) AND !empty($message) AND !empty($phone) AND !empty($address))
        {

            $newFeedId = $this->model->saveZamer($name, $email, $message, $phone, $address);

            if($newFeedId>0)
            {
                sendmail();
                unset($_POST);
                header("Location: /");
                exit();
            }
        }
//        unset($_POST);
        $this->view->render('Обратная связь', $vars);
    }
}