<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m250411_082804_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(255)->notNull(),
            'middle_name' => $this->string(255),
            'last_name' => $this->string(255)->notNull(),
            'designation' => $this->string(255),
            'denomination' => $this->string(255),
            'dob' => $this->date(),
            'dob_region' => $this->string(255),
            'dob_district' => $this->string(255),
            'is_baptized' => $this->boolean()->defaultValue(false),
            'marital_status' => $this->string(255),
            'confirmation' => $this->boolean()->defaultValue(false),
            'marriage_type' => $this->string(255),
            'spouse_name' => $this->string(255),
            'is_join_table' => $this->boolean()->defaultValue(false),
            'street_join' => $this->string(255),
            'church_elder' => $this->string(255),
            'occupation' => $this->string(255),
            'occupation_place' => $this->string(255),
            'designation_designation' => $this->string(255),
            'phone' => $this->string(255),
            'email' => $this->string(255),
            'next_of_kin_phone' => $this->string(255),
            'home_congregation' => $this->string(255),
            'center_id' => $this->integer()->notNull(),
            'password' => $this->string(255)->notNull(),
            'authKey' => $this->string(),
            'password_reset_token' => $this->string(),
            'user_image' => $this->string()->null(),
            'status' => $this->integer()->defaultValue(1),
            'updated_at' => 'timestamp on update current_timestamp',
            'created_at' => $this->timestamp(),
        ]);

        $this->createIndex(
            '{{%idx-users-center_id}}',
            '{{%users}}',
            'center_id'
        );

        // add foreign key for table `{{%centers}}`
        $this->addForeignKey(
            '{{%fk-users-center_id}}',
            '{{%users}}',
            'center_id',
            '{{%centers}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         // drops foreign key
         $this->dropForeignKey(
            '{{%fk-users-center_id}}',
            '{{%users}}'
        );

        // drops index
        $this->dropIndex(
            '{{%idx-users-center_id}}',
            '{{%users}}'
        );

        $this->dropTable('{{%users}}');
    }
}
