<?php

use yii\db\Schema;
use yii\db\Migration;

class m150216_125458_dropuser extends Migration
{
    public function up()
    {
    	$this->dropTable('{{%user}}');
    }

    public function down()
    {
        echo "m150216_125458_dropuser cannot be reverted.\n";

        return false;
    }
}
