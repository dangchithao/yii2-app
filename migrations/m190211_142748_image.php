<?php

use yii\db\Migration;

/**
 * Class m190211_142748_image
 */
class m190211_142748_image extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('image', [
            'id' => $this->primaryKey(),
            'chicken_id' => $this->integer()->notNull(),
            'image_cover' => $this->string(100)->notNull(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('image');
    }
}
