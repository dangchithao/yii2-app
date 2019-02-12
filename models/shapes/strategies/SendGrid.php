<?php

namespace app\models\shapes\strategies;

use app\models\interfaces\SendEngineStrategyInterface;

class SendGrid implements SendEngineStrategyInterface
{
    /**
     * @inheritdoc
     */
    public function sendShape()
    {
        return 'SendGrid email marketing';
    }
}
