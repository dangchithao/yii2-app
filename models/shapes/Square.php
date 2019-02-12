<?php

namespace app\models\shapes;

use app\models\interfaces\Shape;

class Square implements Shape
{
    /**
     * @inheritdoc
     */
    public function draw()
    {
        return 'Square';
    }
}
