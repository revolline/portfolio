<?php

use yii\db\Migration;

/**
 * Class m200722_170151_addTbl__category_article
 */
class m200722_170151_addTbl__category_article extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(11),
            'name' => $this->string('100'),
            'seo_url' => $this->string('100'),
            'seo_desc' => $this->string('500')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
