<?php

namespace app\models\interfaces;

interface SendEngineStrategyInterface
{
    /**
     * @return string
     */
    public function sendShape();
}
