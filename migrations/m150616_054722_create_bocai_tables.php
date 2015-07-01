<?php

use yii\db\Schema;
use yii\db\Migration;

class m150616_054722_create_bocai_tables extends Migration
{
    public function up()
    {
        $this->createTable('{{%post}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' DEFAULT NULL',
            'base_point' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 1',
            'entry_point' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
            'total_point' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 1',
            'result_option_id' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
        ]);

        $this->createTable('{{%option}}', [
            'id' => Schema::TYPE_PK,
            'pid' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' DEFAULT NULL',
            'user_count' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
        ]);

        $this->createTable('{{%user_option}}', [
            'id' => Schema::TYPE_PK,
            'pid' => Schema::TYPE_INTEGER . ' NOT NULL',
            'oid' => Schema::TYPE_INTEGER . ' NOT NULL',
            'uid' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%post}}');
        $this->dropTable('{{%option}}');
        $this->dropTable('{{%user_option}}');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
