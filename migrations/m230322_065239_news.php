<?php

use yii\db\Migration;

class m230322_065239_news extends Migration
{
    private const NAME = 'news';

    public function safeUp()
    {
        $this->createTable(static::NAME, [
            'id' => $this->bigPrimaryKey()->unsigned()->comment('ID'),
            'title' => $this->text()->notNull()->comment('Заголовок'),
            'text' => $this->text()->notNull()->comment('Текст'),
            'onCreate' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')->comment('Дата создания'),
        ]);
    }

    public function safeDown()
    {
        $this->truncateTable(static::NAME);
        $this->dropTable(static::NAME);
    }
}
