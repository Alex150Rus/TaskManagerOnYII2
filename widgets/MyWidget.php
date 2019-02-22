<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 22.02.2019
 * Time: 3:03
 */

namespace app\widgets;


use yii\base\Widget;

class MyWidget extends Widget
{
  public $message = 'world';

  public function init()
  {
    //здесь открывается, а в шаблоне закрывается
    echo "<div class='my'>";
  }


  public function run()
  {
    return $this->render('my', ['message' => $this->message]);
  }
}