<?php

use yii\db\Migration;

/**
 * Class m190814_132158_room_form
 */
class m190814_132158_room_form extends Migration
{
    public function up()
{
    $tableOptions = null;
    if ($this->db->driverName === 'mysql') {
        // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    }

    $this->createTable('{{%room_form}}', [
        'id' => $this->primaryKey(),
        'kvartira2' => $this->string()->notNull()->unique(),
        'price2' => $this->string()->notNull()->unique(),
    ], $tableOptions);
}

    public function down()
{
    $this->dropTable('{{%room_form}}');
}
}
