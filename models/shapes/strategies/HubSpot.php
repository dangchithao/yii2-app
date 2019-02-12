<?php

namespace app\models\shapes\strategies;

use app\models\interfaces\SendEngineStrategyInterface;

class HubSpot implements SendEngineStrategyInterface
{
    /**
     * @inheritdoc
     */
    public function sendShape()
    {
        return 'Hubspot email marketing';
    }
}
