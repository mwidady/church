<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contributions}}`.
 */
class m250411_083957_create_contributions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contributions}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'contribution_type_id' => $this->integer()->notNull(),
            'amount' => $this->decimal(10,2)->notNull(),
            'date_of_payment' => $this->date()->notNull(),
            'payment_mode' => $this->string()->notNull(), // Should validate values (CASH, MOBILE, BANK)
            'reference_no' => $this->string()->null(),
            'payment_desc' => $this->text()->null(),
            'channel_name' => $this->string()->null(),
        ]);

        // Indexes
        $this->createIndex('{{%idx-contributions-user_id}}', '{{%contributions}}', 'user_id');
        $this->createIndex('{{%idx-contributions-contribution_type_id}}', '{{%contributions}}', 'contribution_type_id');

        // Foreign keys
        $this->addForeignKey(
            '{{%fk-contributions-user_id}}',
            '{{%contributions}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            '{{%fk-contributions-contribution_type_id}}',
            '{{%contributions}}',
            'contribution_type_id',
            '{{%contributions_types}}',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('{{%fk-contributions-contribution_type_id}}', '{{%contributions}}');
        $this->dropForeignKey('{{%fk-contributions-user_id}}', '{{%contributions}}');

        $this->dropIndex('{{%idx-contributions-contribution_type_id}}', '{{%contributions}}');
        $this->dropIndex('{{%idx-contributions-user_id}}', '{{%contributions}}');

        $this->dropTable('{{%contributions}}');
    }
}
