<?php

use yii\db\Migration;

/**
 * Class m190211_143124_area
 */
class m190211_143124_area extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('area', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);

        $this->batchInsert(
            'area',
            ['name'],
            [
                ['Miền Bắc'],
                ['Miền Trung'],
                ['Miền Nam']
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('area');
    }
}
