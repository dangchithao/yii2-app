<?php

use yii\db\Migration;

/**
 * Class m190211_144123_click_info
 */
class m190211_144123_click_info extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('click_info', [
            'id' => $this->primaryKey(),
            'data' => $this->text(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('click_info');
    }
}
