<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 04.02.2019
 * Time: 22:28
 */

namespace app\controllers;

use yii\web\Controller;

class DateController extends Controller
{
  public function actionIndex() {

    $date = date('h:i:s');
    return $this->render('index', ['date' => $date]);
  }
}