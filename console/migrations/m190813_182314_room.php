<?php

use yii\db\Migration;

/**
 * Class m190813_182314_room
 */
class m190813_182314_room extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'kvartira' => $this->string()->notNull(),
            'price' => $this->string()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%room}}');
    }
}
