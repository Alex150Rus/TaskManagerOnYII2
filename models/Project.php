<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 04.02.2019
 * Time: 19:56
 */

namespace app\models;


use app\validators\IntegerValidator;
use yii\base\Model;

class Project extends Model
{
  public $title;
  public $description;
  public $version;

  public function rules()
  {
    return [
      [['title', 'description'], 'required'],
      ['title', 'string', 'max' => 5],
      ['title', 'string'],
      ['description', IntegerValidator::class],
      ['version', 'MyValidate']
    ];
  }

  public function myValidate ($attribute, $params) {
    if ($this->$attribute < 10) {
      $this->addError($attribute, "Недостаточное значение атрибута");
    }
  }
}