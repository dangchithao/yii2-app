<?php

use yii\db\Migration;

/**
 * Class m190211_143516_age
 */
class m190211_143516_age extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('age', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);

        $this->batchInsert(
            'age',
            ['name'],
            [
                ['Lông 1'],
                ['Lông 2'],
                ['Lông 3'],
                ['Lông 4'],
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('age');
    }
}
