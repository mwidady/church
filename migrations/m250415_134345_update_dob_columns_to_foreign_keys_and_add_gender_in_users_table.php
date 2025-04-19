<?php

use yii\db\Migration;

class m250415_134345_update_dob_columns_to_foreign_keys_and_add_gender_in_users_table extends Migration
{
    public function up()
    {
        // First, alter the columns to INT
        $this->alterColumn('{{%users}}', 'dob_region', $this->integer()->null());
        $this->alterColumn('{{%users}}', 'dob_district', $this->integer()->null());

        // Add foreign keys
        $this->addForeignKey(
            'fk-users-dob_region',
            '{{%users}}',
            'dob_region',
            '{{%regions}}',
            'id',
            'SET NULL', // or 'CASCADE' / 'RESTRICT' depending on logic
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-users-dob_district',
            '{{%users}}',
            'dob_district',
            '{{%districts}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
    }

    public function down()
    {
        // Drop foreign keys
        $this->dropForeignKey('fk-users-dob_region', '{{%users}}');
        $this->dropForeignKey('fk-users-dob_district', '{{%users}}');

        // Change columns back to VARCHAR(255)
        $this->alterColumn('{{%users}}', 'dob_region', $this->string(255)->null());
        $this->alterColumn('{{%users}}', 'dob_district', $this->string(255)->null());
    }
}
