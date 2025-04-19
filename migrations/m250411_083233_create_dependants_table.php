<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dependants}}`.
 */
class m250411_083233_create_dependants_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dependants}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'middle_name' => $this->string()->null(),
            'last_name' => $this->string()->notNull(),
            'dob' => $this->date()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'dependant_type' => $this->string()->notNull()->defaultValue('CHILD'),
            'is_budtized' => $this->boolean()->defaultValue(false),
            'occupation' => $this->string()->null(),
        ]);

        // Create index for user_id
        $this->createIndex(
            '{{%idx-dependants-user_id}}',
            '{{%dependants}}',
            'user_id'
        );

        // Add foreign key for user_id
        $this->addForeignKey(
            '{{%fk-dependants-user_id}}',
            '{{%dependants}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        // Drop foreign key and index first
        $this->dropForeignKey('{{%fk-dependants-user_id}}', '{{%dependants}}');
        $this->dropIndex('{{%idx-dependants-user_id}}', '{{%dependants}}');

        // Drop table
        $this->dropTable('{{%dependants}}');
    }
}

