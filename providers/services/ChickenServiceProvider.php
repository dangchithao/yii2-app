<?php

namespace app\providers\services;

use app\models\Chicken;
use app\repositories\ChickenRepository;
use app\repositories\interfaces\ChickenRepositoryInterface;
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

//        $this->registerServices();
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

//    /**
//     *  Register services with DI container
//     */
//    private function registerServices(): void
//    {
//        $container = Yii::$container;
//
//        $container->setSingleton(EventService::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//
//            /** @var QuestionTemplateService $questionTemplateService */
//            $questionTemplateService = $container->get(QuestionTemplateService::class);
//
//            /** @var EventContactPersonService $eventContactPersonService */
//            $eventContactPersonService = $container->get(EventContactPersonService::class);
//
//            /** @var EventFinder $eventFinder */
//            $eventFinder = $container->get(EventFinder::class);
//
//            /** @var GCountryService $countryService */
//            $countryService = $container->get(GCountryService::class);
//
//            /** @var LanguageService $languageService */
//            $languageService = $container->get(LanguageService::class);
//
//            /** @var EventCategoryManager $eventCategoryManager */
//            $eventCategoryManager = $container->get(EventCategoryManager::class);
//
//            /** @var AgendaElementTypeService $agendaElementTypeService */
//            $agendaElementTypeService = $container->get(AgendaElementTypeService::class);
//
//            return new EventService(
//                $eventRepository,
//                $questionTemplateService,
//                $eventContactPersonService,
//                $eventFinder,
//                $countryService,
//                $languageService,
//                $agendaElementTypeService,
//                $eventCategoryManager,
//                Yii::$app->getDb()
//            );
//        });
//
//        $container->setSingleton(EventFinder::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//            /** @var EventContactPersonService $eventContactPersonService */
//            $eventContactPersonService = $container->get(EventContactPersonService::class);
//            /** @var EventTypeService $eventTypeService */
//            $eventTypeService = $container->get(EventTypeService::class);
//
//            return new EventFinder(
//                $eventRepository,
//                $eventContactPersonService,
//                $eventTypeService
//            );
//        });
//
//        $container->setSingleton(EventRegistrationService::class, function () use ($container) {
//            /** @var EventParticipantCompanyService $eventParticipantCompanyService */
//            $eventParticipantCompanyService = $container->get(EventParticipantCompanyService::class);
//
//            /** @var EventService $eventService */
//            $eventService = $container->get(EventService::class);
//
//            /** @var RegistrationSourceService $registrationSourceService */
//            $registrationSourceService = $container->get(RegistrationSourceService::class);
//
//            /** @var EventParticipantRoleService $eventParticipantRoleService */
//            $eventParticipantRoleService = $container->get(EventParticipantRoleService::class);
//
//            /** @var MasterContactService $masterContactService */
//            $masterContactService = $container->get(MasterContactService::class);
//
//            /** @var MasterContactNotificationService $masterContactNotificationService */
//            $masterContactNotificationService = $container->get(MasterContactNotificationService::class);
//
//            /** @var EventParticipantService $eventParticipantService */
//            $eventParticipantService = $container->get(EventParticipantService::class);
//
//            /** @var EventParticipantOfferingService $eventParticipantOfferingService */
//            $eventParticipantOfferingService = $container->get(EventParticipantOfferingService::class);
//
//            /** @var EventContactPersonService $eventContactPersonService */
//            $eventContactPersonService = $container->get(EventContactPersonService::class);
//
//            /** @var CountryTagService $countryTagService */
//            $countryTagService = $container->get(CountryTagService::class);
//
//            /** @var MarketingDenialService $marketingDenialService */
//            $marketingDenialService = $container->get(MarketingDenialService::class);
//
//            /** @var ProspectService $prospectService */
//            $prospectService = $container->get(ProspectService::class);
//
//            /** @var EventDeadlineService $eventDeadlineService */
//            $eventDeadlineService = $container->get(EventDeadlineService::class);
//
//            /** @var ActionLogService $actionLogService */
//            $actionLogService = $container->get(ActionLogService::class);
//
//            /** @var EventQuestionAnswerService $eventQuestionAnswerService */
//            $eventQuestionAnswerService = $container->get(EventQuestionAnswerService::class);
//
//            /** @var ContactTypeIdentifierService $contactTypeIdentifierService */
//            $contactTypeIdentifierService = $container->get(ContactTypeIdentifierService::class);
//
//            /** @var EventGroupLinkManager $eventGroupLinkManager */
//            $eventGroupLinkManager = $container->get(EventGroupLinkManager::class);
//
//            /** @var EventParticipantNotificationMessagingService $eventParticipantNotificationMessagingService */
//            $eventParticipantNotificationMessagingService = $container->get(EventParticipantNotificationMessagingService::class);
//
//            /** @var CommandBusInterface $commandBus */
//            $commandBus = $container->get(CommandBusInterface::class);
//
//            return new EventRegistrationService(
//                Yii::$app->getDb(),
//                $eventParticipantCompanyService,
//                $eventService,
//                $registrationSourceService,
//                $eventParticipantRoleService,
//                $masterContactService,
//                $masterContactNotificationService,
//                $eventParticipantService,
//                $eventParticipantOfferingService,
//                $eventContactPersonService,
//                $countryTagService,
//                $marketingDenialService,
//                $prospectService,
//                $eventDeadlineService,
//                $actionLogService,
//                $eventQuestionAnswerService,
//                $contactTypeIdentifierService,
//                $eventGroupLinkManager,
//                $eventParticipantNotificationMessagingService,
//                $commandBus
//            );
//        });
//
//        $container->setSingleton(EventQuestionTemplateManager::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//
//            /** @var QuestionTemplateService $questionTemplateService */
//            $questionTemplateService = $container->get(QuestionTemplateService::class);
//
//            return new EventQuestionTemplateManager($eventRepository, $questionTemplateService);
//        });
//
//        $container->setSingleton(EventFunctionManager::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//
//            return new EventFunctionManager(
//                $eventRepository
//            );
//        });
//
//        $container->setSingleton(EventSubThemeManager::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//            /** @var RCSubThemeService $subThemeService */
//            $subThemeService = $container->get(RCSubThemeService::class);
//
//            return new EventSubThemeManager(
//                $eventRepository,
//                $subThemeService,
//                new ThemeChecker()
//            );
//        });
//
//        $container->setSingleton(EventCategoryManager::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//
//            return new EventCategoryManager($eventRepository);
//        });
//
//        $container->setSingleton(EventIndustryManager::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//
//            return new EventIndustryManager($eventRepository);
//        });
//
//        $container->setSingleton(DelegatePriceManager::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//
//            return new DelegatePriceManager($eventRepository);
//        });
//
//        $container->setSingleton(UpcomingEventService::class, function () use ($container) {
//            /** @var EventRepositoryInterface $eventRepository */
//            $eventRepository = $container->get(EventRepositoryInterface::class);
//
//            return new UpcomingEventService($eventRepository);
//        });
//    }
}
