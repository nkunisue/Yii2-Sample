<?php

namespace app\modules\api\v1\controllers;


use Yii;
use yii\web\Response;

class CommonController extends \yii\web\Controller
{
    // API Controller 共通処理はここで
    public function init()
    {
        parent::init();
        Yii::$app->response->format = Response::FORMAT_JSON;
    }

    /**
     * 共通前処理
     * @param \yii\base\Action $action
     * @return bool
     */
//    public function beforeAction($action)
//    {
//        return true;
//    }


    /**
     * 共通後処理
     * @param \yii\base\Action $action
     * @param mixed $result
     * @return mixed
     */
//    public function afterAction($action, $result)
//    {
//        return $result;
//    }

}