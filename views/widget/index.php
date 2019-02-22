<?php

/** @var \app\models\tables\Test $model*/
use \yii\widgets\ActiveForm;
use yii\helpers\Html;

//начало формы - начальный тэг
$form = ActiveForm::begin();

//поля для инпута и его привязка с атрибутом модели
echo $form->field($model, 'title')
  //надо выбрать элемент поля
  -> textInput();

echo $form->field($model, 'content') -> textInput()->label('Контент');
echo Html::submitButton('Отправить', ['class' => 'btn btn-success']);
//замыкающий тэг
ActiveForm::end();

echo \app\widgets\MyWidget::widget(['message' => 'user']);

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 22.02.2019
 * Time: 2:09
 */