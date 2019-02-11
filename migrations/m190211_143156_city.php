<?php

use yii\db\Migration;

/**
 * Class m190211_143156_city
 */
class m190211_143156_city extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('city');
    }
}
