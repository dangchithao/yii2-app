<?php

use yii\db\Migration;

/**
 * Class m190211_142942_fighting_style
 */
class m190211_142942_fighting_style extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('fighting_style', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);

        $this->batchInsert(
            'fighting_style',
            ['name'],
            [
                ['Thiện dọc'],
                ['Thiện mé'],
                ['Cưa đè hai mang'],
                ['Chui luồn'],
                ['Ôm đấm, kiềng'],
                ['Đa lối, đa đòn'],
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('fighting_style');
    }
}
