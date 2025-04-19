<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%users}}`.
 */
class m250411_130652_add_created_by_column_to_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(){
    $this->addColumn('{{%users}}', 'created_by', $this->integer()->null());

        // Create index for faster lookups
        $this->createIndex(
            '{{%idx-user-created_by}}',
            '{{%users}}',
            'created_by'
        );

        // Add foreign key (self reference)
        $this->addForeignKey(
            '{{%fk-user-created_by}}',
            '{{%users}}',
            'created_by',
            '{{%users}}',
            'id',
            'SET NULL', // if creator is deleted, set to NULL
            'CASCADE'   // if updated, cascade
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('{{%fk-user-created_by}}', '{{%users}}');
        $this->dropIndex('{{%idx-user-created_by}}', '{{%users}}');
        $this->dropColumn('{{%users}}', 'created_by');
    }
}
