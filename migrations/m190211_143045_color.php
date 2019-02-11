<?php

use yii\db\Migration;

/**
 * Class m190211_143045_color
 */
class m190211_143045_color extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('color', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);

        $this->batchInsert(
            'color',
            ['name'],
            [
                ['Ô đen'],
                ['Tía'],
                ['Hoa mơ'],
                ['Chuối'],
                ['Xám hồng'],
                ['Xám khô'],
                ['Bạch nhạn'],
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('color');
    }
}
