<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_category}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%article}}`
 * - `{{%category}}`
 */
class m200722_172525_create_article_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article_category}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `article_id`
        $this->createIndex(
            '{{%idx-article_category-article_id}}',
            '{{%article_category}}',
            'article_id'
        );

        // add foreign key for table `{{%article}}`
        $this->addForeignKey(
            '{{%fk-article_category-article_id}}',
            '{{%article_category}}',
            'article_id',
            '{{%article}}',
            'id',
            'CASCADE'
        );

        // creates index for column `category_id`
        $this->createIndex(
            '{{%idx-article_category-category_id}}',
            '{{%article_category}}',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-article_category-category_id}}',
            '{{%article_category}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%article}}`
        $this->dropForeignKey(
            '{{%fk-article_category-article_id}}',
            '{{%article_category}}'
        );

        // drops index for column `article_id`
        $this->dropIndex(
            '{{%idx-article_category-article_id}}',
            '{{%article_category}}'
        );

        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-article_category-category_id}}',
            '{{%article_category}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-article_category-category_id}}',
            '{{%article_category}}'
        );

        $this->dropTable('{{%article_category}}');
    }
}
