<?php

use yii\db\Migration;

/**
 * Class m190221_172015_addcolumn_tasks_table
 */
class m190221_172015_addcolumn_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->addColumn('tasks', 'creator_id', 'int');
      $this->addColumn('tasks', 'deadline', 'date');
      $this->addColumn('tasks', 'status_id', 'int');
      $this->createIndex('ix_tasks_creator', 'tasks', 'creator_id');
      $this->createIndex('ix_tasks_status', 'tasks', 'status_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tasks', 'creator_id');
        $this->dropColumn('tasks', 'deadline');
        $this->dropColumn('tasks', 'status_id');
        $this->dropIndex('ix_tasks_creator', 'tasks');
        $this->dropIndex('ix_tasks_status', 'tasks');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190221_172015_addcolumn_tasks_table cannot be reverted.\n";

        return false;
    }
    */
}
