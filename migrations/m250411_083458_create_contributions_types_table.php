<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contributions_types}}`.
 */
class m250411_083458_create_contributions_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
        {
            $this->createTable('{{%contributions_types}}', [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'description' => $this->text()->null(),
            ]);
        }
    
        public function safeDown()
        {
            $this->dropTable('{{%contributions_types}}');
        }
    }
