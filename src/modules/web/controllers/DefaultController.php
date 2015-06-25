<?php

namespace app\modules\web\controllers;

class DefaultController extends CommonController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
