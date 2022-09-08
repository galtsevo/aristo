<?php

namespace controllers;

use core\Controller;
use lib\Db;

class CatalogController extends Controller
{
    public function gallery(){
        $result = $this->model->getGallery($this->route);

        return $result;
    }
    public function typeAction(){

        $result = $this->model->getTypeItems($this->route);

        $vars = [
            'intro_title' => $result[0]['intro_title'],
            'intro_text' => $result[0]['intro_text'],
            'addition' => $result[0]['addition'],
            'itemid' => $result[0]['itemid'],
            'ctype' => $result[0]['ctype']
        ];

       if (!empty($result[0]['idtype']))
            $vars['items'] = $result;
       else
            $vars['items'] = null;

       $qqq = $this->gallery();

       $this->view->render('Каталог', $vars);
    }

    public function itemAction(){

        $result = $this->model->getItems($this->route);

        $vars = [
            'title' => $result[0]['title'],
            'imgpath' => $result[0]['path'],
            'addition' => $result[0]['addition']
        ];
//        debug($vars);
        $this->view->render('Каталог', $vars);
    }
}