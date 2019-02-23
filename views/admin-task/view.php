<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tables\Tasks */

if (!$hide) {
  $this->title = $model->name;
  $this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
  $this->params['breadcrumbs'][] = $this->title;
  \yii\web\YiiAsset::register($this);
}
?>
<div class="tasks-view">

  <h1><?= Html::encode($this->title) ?></h1>

  <p>
    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
      'class' => 'btn btn-danger',
      'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
      ],
    ]) ?>
  </p>

  <?= DetailView::widget([
    'model' => $model,
    'template' => '<tr><td>{label}</td><td>{value}</td></tr>',
    'attributes' => [
      'id',
      'name',
      'date',
      'description:text',
      [
        'label' => 'responsible_id',
        'value' => $model->users->id,
      ],
      [
        'label' => 'responsible',
        'value' => $model->users->login,
      ],
      [
        'label' => 'creator_id',
        'value' => $model->creator->id,
      ],
      [
        'label' => 'creator',
        'value' => $model->creator->login,
      ],
      'status_id',
      [
        'label' => 'status',
        'value' => $model->status->name
      ],
      'deadline',
    ],
  ]) ?>

</div>
