<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 21.02.2019
 * Time: 12:39
 */

namespace app\controllers;


use app\models\tables\Tasks;
use yii\web\Controller;

class DbController extends Controller
{
  public function actionIndex(){
    $db = \Yii::$app->db->createCommand('SELECT id FROM test')->queryColumn();
    var_dump($db);
  }

  public function actionAr(){
    /*$model = new Tasks([
      'name' => 'task 1',
      'description' => 'овладеть Yii',
      'creator_id' => 1,
      'responsible_id' => 2,
      'date' => date('Y-m-d'),
      'deadline' => date('2019-03-30'),
      'status_id' => 1,
    ]);*/

    /*$res = Tasks::findOne(['name' => 'task 4']);
        var_dump($res);*/

    //var_dump(Tasks::findAll([1 ,3]));

    //var_dump(Tasks::find()->all());

    /*$model = Tasks::findOne(3);
    $model->description = 'повторить JS';
    $model->deadline = date('2019-04-25');
    $model->save();*/

    //Tasks::deleteAll('>', 'id', 5);

    /*$model = Tasks::findOne(2);
    $model->delete();*/

    $model = Tasks::findOne(2);
    //var_dump($model->status);
    //$model->find(); "SELECT ALL FROM TABLE"

    // SELECT 'name', 'description' FROM tasks WHERE 'status-id' > :status-id AND creator_id = :creator_id LIMIT 10
    $query = $model->find()
      ->select(['name', 'description'])
      -> where('>', 'status_id', 2)// или ('status_id > :status_id') и в all передать параметры
      -> andWhere(['creator_id', 1])
      -> limit(10)
      -> all();

    exit;
  }
}