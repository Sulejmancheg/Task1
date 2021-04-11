<?php

namespace controller;

class SignController extends Controller
{
    public function actionIn()
    {
            $this->getModel()->setTemplate('sign/in');
            $this->getModel()->setData('Sign in');
    }
}