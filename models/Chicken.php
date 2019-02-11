<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Class Chicken
 *
 * @property integer $id
 * @property integer $age_id
 * @property integer $color_id
 * @property string $image_cover
 * @property float $weight
 * @property string $description
 * @property string $created
 * @property string $modified
 *
 * @package app\models
 */
class Chicken extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chicken';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age_id', 'color_id'], 'require'],
            [['age_id', 'color_id'], 'integer'],
            [['image_cover'], 'string', 'max' => 100],
            [['weight'], 'number'],
            [['description'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'DefaultName' => 'Default Name',
        ];
    }

    /**
     * @inheritdoc
     */
    public function extraFields()
    {
        return [
            'age',
            'color'
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getAge()
    {
        return $this->hasOne(Age::class, ['id' => 'age_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::class, ['id' => 'color_id']);
    }
}
