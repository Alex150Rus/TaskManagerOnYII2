<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tables\TasksStatuses */

$this->title = 'Create Tasks Statuses';
$this->params['breadcrumbs'][] = ['label' => 'Tasks Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-statuses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
