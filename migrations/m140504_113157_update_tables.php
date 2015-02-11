<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\db\Schema;
use chd7well\user\migrations\Migration;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class m140504_113157_update_tables extends Migration
{
    public function up()
    {
        // user table
        $this->dropIndex('sys_user_confirmation', '{{%sys_user}}');
        $this->dropIndex('sys_user_recovery', '{{%sys_user}}');
        $this->dropColumn('{{%sys_user}}', 'confirmation_token');
        $this->dropColumn('{{%sys_user}}', 'confirmation_sent_at');
        $this->dropColumn('{{%sys_user}}', 'recovery_token');
        $this->dropColumn('{{%sys_user}}', 'recovery_sent_at');
        $this->dropColumn('{{%sys_user}}', 'logged_in_from');
        $this->dropColumn('{{%sys_user}}', 'logged_in_at');
        $this->renameColumn('{{%sys_user}}', 'registered_from', 'registration_ip');
        $this->addColumn('{{%sys_user}}', 'flags', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0');

        // account table
        $this->renameColumn('{{%sys_account}}', 'properties', 'data');
    }

    public function down()
    {
        return false;
    }
}
