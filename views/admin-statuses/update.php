<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tables\TasksStatuses */

$this->title = 'Update Tasks Statuses: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tasks Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tasks-statuses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
