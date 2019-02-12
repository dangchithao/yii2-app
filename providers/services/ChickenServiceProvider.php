<?php

namespace app\providers\services;

use app\models\Chicken;
use app\repositories\ChickenRepository;
use app\repositories\interfaces\ChickenRepositoryInterface;
use app\services\ChickenService;
use Yii;
use yii\base\BootstrapInterface;

class ChickenServiceProvider implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $this->registerRepositories();

        $this->registerServices();
    }

    /**
     * Register repositories with DI container
     */
    private function registerRepositories(): void
    {
        Yii::$container->setSingleton(ChickenRepositoryInterface::class, function () {
            return new ChickenRepository(
                new Chicken()
            );
        });
    }

    /**
     *  Register services with DI container
     */
    private function registerServices(): void
    {
        $container = Yii::$container;

        $container->setSingleton(ChickenService::class, function () use ($container) {
            /** @var ChickenRepositoryInterface $chickenRepository */
            $chickenRepository = $container->get(ChickenRepositoryInterface::class);

            return new ChickenService(
                $chickenRepository
            );
        });
    }
}
