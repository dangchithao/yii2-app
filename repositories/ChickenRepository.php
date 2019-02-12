<?php

namespace app\repositories;

use app\repositories\interfaces\ChickenRepositoryInterface;

class ChickenRepository extends BaseRepository implements ChickenRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function findAllChicken()
    {
        return $this->model->find()->all();
    }
}
