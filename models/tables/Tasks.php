<?php

namespace app\models\tables;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property string $description
 * @property int $responsible_id
 * @property int $creator_id
 * @property string $deadline
 * @property int $status_id
 *
 * @property TasksStatuses $status
 * @property Users $users
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date'], 'required'],
            [['date', 'deadline'], 'safe'],
            [['description'], 'string'],
            [['responsible_id', 'creator_id', 'status_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => TasksStatuses::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date' => 'Date',
            'description' => 'Description',
            'responsible_id' => 'Responsible ID',
            'creator_id' => 'Creator ID',
            'deadline' => 'Deadline',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(TasksStatuses::class, ['id' => 'status_id']);
    }

    public function getUsers()
    {
      return $this->hasOne(Users::class, ['id' => 'responsible_id']);
    }

    public function getCreator()
    {
      return $this->hasOne(Users::class, ['id' => 'creator_id']);
    }
}
