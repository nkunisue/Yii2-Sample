<?php

namespace app\modules\api\v1\controllers;

use app\modules\web\controllers\CommonController;
use yii\web\Controller;

class DefaultController extends CommonController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
