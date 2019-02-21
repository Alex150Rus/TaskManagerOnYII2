<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_statuses}}`.
 */
class m190221_194735_create_task_statuses_table extends Migration
{
    protected $tableName = 'tasks_statuses';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
        ]);

        $this->batchInsert($this->tableName, ['name'], [
          ['Новая'],
          ['В работе'],
          ['Выполнена'],
          ['Тестирование'],
          ['Доработка'],
          ['Закрыта']
        ]);

        $tasksTable = \app\models\tables\Tasks::tableName();

        $this->addForeignKey(
          'fk_tasks_statuses',
          $tasksTable,
          'status_id',
          $this->tableName,
          'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
