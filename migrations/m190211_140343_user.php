<?php

use yii\db\Migration;

/**
 * Class m190211_140343_user
 */
class m190211_140343_user extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull(),
            'tel' => $this->string(50)->notNull(),
            'address' => $this->string(255),
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
        $this->dropTable('user');
    }
}
