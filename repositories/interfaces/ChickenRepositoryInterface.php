<?php

namespace app\repositories\interfaces;

use app\models\Chicken;

interface ChickenRepositoryInterface
{
    /**
     * @return Chicken[]
     */
    public function findChickens();
}
