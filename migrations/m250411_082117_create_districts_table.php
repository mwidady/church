<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%districts}}`.
 */
class m250411_082117_create_districts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%districts}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'region_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `region_id`
        $this->createIndex(
            '{{%idx-districts-region_id}}',
            '{{%districts}}',
            'region_id'
        );

        // add foreign key for table `{{%regions}}`
        $this->addForeignKey(
            '{{%fk-districts-region_id}}',
            '{{%districts}}',
            'region_id',
            '{{%regions}}',
            'id',
            'CASCADE' // or SET NULL, RESTRICT depending on your use case
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%regions}}`
        $this->dropForeignKey(
            '{{%fk-districts-region_id}}',
            '{{%districts}}'
        );

        // drops index for column `region_id`
        $this->dropIndex(
            '{{%idx-districts-region_id}}',
            '{{%districts}}'
        );

        $this->dropTable('{{%districts}}');
    }
}
