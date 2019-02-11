<?php

namespace app\repositories;

use app\repositories\interfaces\ChickenRepositoryInterface;

class ChickenRepository extends BaseRepository implements ChickenRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function findChickens()
    {
        return $this->model->find()->all();
    }
}
