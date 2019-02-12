<?php

namespace app\services;

use app\models\Chicken;
use app\repositories\interfaces\ChickenRepositoryInterface;

class ChickenService
{
    /**
     * @var ChickenRepositoryInterface
     */
    private $chickenRepository;

    /**
     * ChickenService constructor.
     *
     * @param ChickenRepositoryInterface $chickenRepository
     */
    public function __construct(ChickenRepositoryInterface $chickenRepository)
    {
        $this->chickenRepository = $chickenRepository;
    }

    /**
     * @return Chicken[]
     */
    public function findAllChicken()
    {
        return $this->chickenRepository->findAllChicken();
    }
}
