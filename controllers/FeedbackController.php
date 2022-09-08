<?php

namespace controllers;

use core\Controller;
use lib\Db;

class FeedbackController extends Controller
{
    public function indexAction(){
        $vars = [];

        if(!empty($_POST)){
            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $message = $_POST['message'];
            $visible = 0;
        }
//debug($_POST);
        if(!empty($name) AND !empty($email) AND !empty($message))
        {

            $newFeedId = $this->model->saveFeedback($name, $email, $message, $visible);

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

    public function commenAction(){
        $result = $this->model->getFeedback(1, 'comment');
        $vars['items'] = $result;
        $this->view->render('Отзывы', $vars);
    }

    public function commenaddAction(){
        $vars = [];

        if(!empty($_POST)){
            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $message = $_POST['message'];
            $visible = 1;
            $type    = 'comment';
        }
//debug($_POST);
        if(!empty($name) AND !empty($email) AND !empty($message))
        {

            $newFeedId = $this->model->saveFeedback($name, $email, $message, $visible, $type);

            if($newFeedId>0)
            {
                sendmail();
                unset($_POST);
                header("Location: /feedback/commen");
                exit();
            }
        }
//        unset($_POST);
        $this->view->render('Отзыв', $vars);
    }
}