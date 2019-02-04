<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 04.02.2019
 * Time: 23:10
 */

namespace app\models;


use app\validators\ArrayValidator;
use app\validators\IntegerValidator;
use yii\base\Model;

class Task extends Model
{
  public $taskName;
  public $taskDescription;
  public $deadLine;
  public $responsible;
  public $currentTime;
  public $startTime;
  public $endTime;
  public $status;
  public $manager;

  public function rules()
  {
    return [
      [['taskName', 'taskDescription', 'status'], 'string'],
      [['responsible', 'manager'], ArrayValidator::class],
      [['taskName', 'status'], 'string', 'max' => 20],
      [['deadLine', 'currentTime', 'startTime', 'endTime'], IntegerValidator::class]
    ];
  }
}