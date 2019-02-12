<?php

namespace app\models\shapes;

use app\models\interfaces\Shape;

class Rectangle implements Shape
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        return 'Rectangle';
    }
}
