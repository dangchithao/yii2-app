<?php

namespace app\models\patterns;

use app\models\interfaces\Shape;
use app\models\interfaces\SendEngineStrategyInterface;
use app\models\shapes\Circle;
use app\models\shapes\Rectangle;
use app\models\shapes\Square;

class ShapeStrategy
{
    /**
     * @var SendEngineStrategyInterface
     */
    private $sendEngine;

    /**
     * ShapeStrategy constructor.
     *
     * @param SendEngineStrategyInterface $sendEngineStrategy
     */
    public function __construct(SendEngineStrategyInterface $sendEngineStrategy)
    {
        $this->sendEngine = $sendEngineStrategy;
    }

    /**
     * @return string
     */
    public function send()
    {
        return $this->sendEngine->sendShape();
    }
}
