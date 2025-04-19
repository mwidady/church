<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%messages}}`.
 */
class m250412_073944_create_messages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%messages}}', [
            'id' => $this->primaryKey(),
            'subject' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'center_at' => $this->dateTime()->null(),
        ]);

        // Create index and foreign key for created_by → user.id
        $this->createIndex(
            '{{%idx-messages-created_by}}',
            '{{%messages}}',
            'created_by'
        );

        $this->addForeignKey(
            '{{%fk-messages-created_by}}',
            '{{%messages}}',
            'created_by',
            '{{%users}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('{{%fk-messages-created_by}}', '{{%messages}}');
        $this->dropIndex('{{%idx-messages-created_by}}', '{{%messages}}');
        $this->dropTable('{{%messages}}');
    }
}