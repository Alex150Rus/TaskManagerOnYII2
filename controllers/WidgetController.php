<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 22.02.2019
 * Time: 2:07
 */

namespace app\controllers;


use app\models\tables\Test;
use yii\web\Controller;

class WidgetController extends Controller
{
  public function actionIndex(){

    $model = new Test([
      'title' => 'Тестовая табличка',
      'content' => 'изучаем Yii',
    ]);
    return $this->render('index',['model' => $model]);
  }
}