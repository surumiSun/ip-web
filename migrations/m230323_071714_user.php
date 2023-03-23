<?php

use yii\db\Migration;

class m230323_071714_user extends Migration
{
    private const NAME = 'user';

    public function safeUp()
    {
        $this->createTable(static::NAME, [
            'id' => $this->bigPrimaryKey()->unsigned()->comment('ID'),
            'login' => $this->string(255)->notNull()->comment('Логин'),
            'password' => $this->string(255)->notNull()->comment('Пароль'),
            'rule' => $this->tinyInteger()->notNull()->defaultValue(0)->comment('Параметры'),
        ]);

        $this->insert(static::NAME, ['login' => 'admin@mail.ru', 'password' => md5('admin'), 'rule' => 1]);
    }

    public function safeDown()
    {
        $this->truncateTable(static::NAME);
        $this->dropTable(static::NAME);
    }
}
