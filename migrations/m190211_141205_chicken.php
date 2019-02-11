<?php

use yii\db\Migration;

/**
 * Class m190211_141205_chicken
 */
class m190211_141205_chicken extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('chicken', [
            'id' => $this->primaryKey(),
            'age_id' => $this->integer()->notNull(),
            'color_id' => $this->integer()->notNull(),
            'image_cover' => $this->string(100)->notNull(),
            'weight' => $this->float()->notNull(),
            'description' => $this->text(),
            'created' => $this->dateTime()->defaultExpression('now()'),
            'modified' => $this->dateTime()->defaultExpression('now()')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('chicken');
    }
}
