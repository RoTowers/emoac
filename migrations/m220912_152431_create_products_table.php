<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m220912_152431_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64),
            'description' => $this->string(255),
            'units' => $this->integer(4)->defaultValue(0)->unsigned()->notNull(),
            'price' => $this->integer(10)->defaultValue(0)->unsigned()->notNull(),
            'image' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
