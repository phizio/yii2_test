<?php

use yii\db\Schema;
use yii\db\Migration;

class m160707_090346_create_clients extends Migration
{
    public function up()
    {
        $this->createTable('clients', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);
    }

    public function down()
    {
        $this->dropTable('clients');
    }
}
