<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m170110_152917_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50),
            'desc' => $this->text(),
            'price' => $this->float()
        ]);
        $this->insert('product',[
           'name' => 'продукт 1',
            'desc' => 'описание 1',
            'price' => 23.2
        ]);
        $this->insert('product',[
           'name' => 'продукт 2',
            'desc' => 'описание 2',
            'price' => 2.2
        ]);
        $this->insert('product',[
           'name' => 'продукт 3',
            'desc' => 'описание 3',
            'price' => 117.0
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
