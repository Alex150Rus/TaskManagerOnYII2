<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tables\Tasks */
/* @var $modelUsers app\models\tables\Users */
/* @var $modelStatuses app\models\tables\TasksStatuses */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'responsible_id')
      ->dropDownList($modelUsers) ?>

    <?= $form->field($model, 'creator_id')
      ->dropDownList($modelUsers) ?>

    <?= $form->field($model, 'deadline')->textInput() ?>

    <?= $form->field($model, 'status_id')->dropDownList($modelStatuses)?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
