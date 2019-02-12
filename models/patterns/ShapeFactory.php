<?php

namespace app\models\patterns;

use app\models\interfaces\Shape;
use app\models\shapes\Circle;
use app\models\shapes\Rectangle;
use app\models\shapes\Square;

class ShapeFactory
{
    /**
     * @param string $type
     *
     * @return Shape
     */
    public static function getShape(string $type)
    {
        $instance = null;

        switch (strtolower($type)) {
            case 'circle':
                $instance = new Circle();
                break;
            case 'rectangle':
                $instance = new Rectangle();
                break;
            case 'square':
                $instance = new Square();
                break;
        }

        return $instance;
    }
}
