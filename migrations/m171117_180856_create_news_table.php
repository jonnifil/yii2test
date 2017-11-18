<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m171117_180856_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64),
            'date' => $this->date()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
