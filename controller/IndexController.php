<?php

namespace controller;


class IndexController extends Controller{

    public function actionIndex(){
        $this->getModel()->setTemplate('index/index');
        $this->getModel()->setData('Страница пользователя');
    }

    public function action404(){
        $this->getModel()->setTemplate('index/404');
        $this->getModel()->setData('404 Page');
    }

    public function actionBan(){
        $this->getModel()->setTemplate('index/ban');
        $this->getModel()->setLayout('ban');
        $this->getModel()->setData('Ban Page');
    }
}