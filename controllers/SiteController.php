<?php

namespace app\controllers;

use app\models\patterns\ShapeFactory;
use app\models\patterns\ShapeStrategy;
use app\models\patterns\Singleton;
use app\models\shapes\strategies\HubSpot;
use app\models\shapes\strategies\SendGrid;
use app\models\UploadForm;
use app\services\ChickenService;
use Yii;
use yii\base\Module;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * @var ChickenService
     */
    private $chickenService;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * SiteController constructor.
     *
     * @param string $id
     * @param Module $module
     * @param ChickenService $chickenService
     * @param array $config
     */
    public function __construct(
        string $id,
        Module $module,
        ChickenService $chickenService,
        array $config = []
    ) {
        parent::__construct($id, $module, $config);

        $this->chickenService = $chickenService;
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->layout = 'chicken';

        $shape = ShapeFactory::getShape('SQUARE');

        $circle1 = Singleton::getSingletonShapeCircle();
        echo $circle1->draw();
        $circle2 = Singleton::getSingletonShapeCircle();
        echo '2: ' . $circle2->draw();

        // product environment will be send via SendGrid
        $sendGrid = new ShapeStrategy(new SendGrid());

        echo $sendGrid->send();

        // develop environment will be send via HubSpot
        $hubSpot = new ShapeStrategy(new HubSpot());

        echo $hubSpot->send();


        return $this->render('about', [
            'shape' => $shape->draw(),
        ]);
    }

    public function actionImage()
    {
        return $this->render('image', [
            'chickens' => $this->chickenService->findAllChicken()
        ]);
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // handle redirect here
                return;
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function actionJson()
    {
        return $this->asJson(['name' => 'Dang Chi Thao']);
    }
}
