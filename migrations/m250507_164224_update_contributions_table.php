<?php

use yii\db\Migration;

class m250507_164224_update_contributions_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        // Make user_id nullable
        $this->alterColumn('{{%contributions}}', 'user_id', $this->integer()->null());

        // Add created_by column
        $this->addColumn('{{%contributions}}', 'created_by', $this->integer()->null());

        // Index for created_by
        $this->createIndex(
            '{{%idx-contributions-created_by}}',
            '{{%contributions}}',
            'created_by'
        );

        // Add foreign key for created_by
        $this->addForeignKey(
            '{{%fk-contributions-created_by}}',
            '{{%contributions}}',
            'created_by',
            '{{%users}}',
            'id',
            'SET NULL'
        );

        // Optionally: update existing FK for user_id if it was CASCADE before
        $this->dropForeignKey('{{%fk-contributions-user_id}}', '{{%contributions}}');
        $this->addForeignKey(
            '{{%fk-contributions-user_id}}',
            '{{%contributions}}',
            'user_id',
            '{{%users}}',
            'id',
            'SET NULL'
        );
    }

    public function safeDown()
    {
        // Revert foreign key changes
        $this->dropForeignKey('{{%fk-contributions-user_id}}', '{{%contributions}}');
        $this->addForeignKey(
            '{{%fk-contributions-user_id}}',
            '{{%contributions}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        // Drop created_by column and foreign key
        $this->dropForeignKey('{{%fk-contributions-created_by}}', '{{%contributions}}');
        $this->dropIndex('{{%idx-contributions-created_by}}', '{{%contributions}}');
        $this->dropColumn('{{%contributions}}', 'created_by');

        // Restore user_id as not null if needed
        $this->alterColumn('{{%contributions}}', 'user_id', $this->integer()->notNull());
    }
}