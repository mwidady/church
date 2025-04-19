<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%centers}}`.
 */
class m250411_082313_create_centers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%centers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'address' => $this->string(500),
            'district_id' => $this->integer()->notNull(),
            'email' => $this->string(255),
        ]);

        // creates index for column `district_id`
        $this->createIndex(
            '{{%idx-centers-district_id}}',
            '{{%centers}}',
            'district_id'
        );

        // add foreign key for table `{{%districts}}`
        $this->addForeignKey(
            '{{%fk-centers-district_id}}',
            '{{%centers}}',
            'district_id',
            '{{%districts}}',
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
            '{{%fk-centers-district_id}}',
            '{{%centers}}'
        );

        // drops index
        $this->dropIndex(
            '{{%idx-centers-district_id}}',
            '{{%centers}}'
        );

        $this->dropTable('{{%centers}}');
    }
}
