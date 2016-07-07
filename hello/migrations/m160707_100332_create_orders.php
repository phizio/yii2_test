<?php

use yii\db\Schema;
use yii\db\Migration;

class m160707_100332_create_orders extends Migration
{
    public function up()
    {
        $this->createTable('orders', [
            'id' => Schema::TYPE_PK,
            'amount' => Schema::TYPE_INTEGER . ' NOT NULL',
            'client_id' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('orders');
    }
}
