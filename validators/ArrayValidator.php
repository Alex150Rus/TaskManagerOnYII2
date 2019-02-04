<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 04.02.2019
 * Time: 23:31
 */

namespace app\validators;


use yii\validators\Validator;

class ArrayValidator extends Validator
{

  public $message = "атрибут должен быть массивом";

  public function validateAttribute($model, $attribute)
  {
    $value = $model -> $attribute;
    if (!is_array($value)) {
      $this-> addError($model, $attribute, $this->message);
    }
  }

}