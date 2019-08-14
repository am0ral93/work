<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\RoomForm;
use \yii\web\Controller;

class RoomController extends Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        $roomList = RoomForm::find()->all();
        return $this->render('index', [
            'roomList' => '$roomList',
        ]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
