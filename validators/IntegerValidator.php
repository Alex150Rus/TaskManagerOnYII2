<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 04.02.2019
 * Time: 21:16
 */

namespace app\validators;


use yii\validators\Validator;

class IntegerValidator extends Validator
{
  public $message = 'Параметр не является целым числом';

  public function validateAttribute($model, $attribute)
  {
    $value = $model -> $attribute;
    if (!is_int($value)) {
      $this-> addError($model, $attribute, $this->message);
    }
  }
}