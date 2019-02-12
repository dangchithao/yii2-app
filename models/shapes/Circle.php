<?php

namespace app\models\shapes;

use app\models\interfaces\Shape;

class Circle implements Shape
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        return 'Circle';
    }
}
