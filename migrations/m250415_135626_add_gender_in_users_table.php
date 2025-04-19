<?php

use yii\db\Migration;

class m250415_135626_add_gender_in_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

            // Add gender column after last_name
            $this->execute("ALTER TABLE `users` ADD `gender` VARCHAR(10) NULL AFTER `last_name`");
        }
        
        public function down()
        {
            // Drop the gender column
            $this->dropColumn('users', 'gender');
        }
}
