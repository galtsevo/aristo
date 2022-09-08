<?php

namespace controllers;

use core\Controller;
use lib\Db;

class CalculatorController extends Controller
{
    public function devAction(){
        $vars[] = '';
        $this->view->render('Калькулятор стоимости', $vars);
    }
}