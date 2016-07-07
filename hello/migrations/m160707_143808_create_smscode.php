<?php

use yii\db\Migration;

class m160707_143808_create_smscode extends Migration
{
    public function up()
    {
        $this->createTable('smscode', [
            'id' => $this->primaryKey()
        ]);
    }

    public function down()
    {
        $this->dropTable('smscode');
    }
}
