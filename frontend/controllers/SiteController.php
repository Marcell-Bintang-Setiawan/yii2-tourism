<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\TblTourism;
use yii\web\NotFoundHttpException;
use app\models\Ekraf;
use frontend\models\Post;
use frontend\models\Kuliner;
use yii\data\Pagination;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $db = Yii::$app->db;
        $data = $db->createCommand('SELECT * FROM `tbl_tourism`  ORDER BY `id` DESC LIMIT 4')->queryAll();
        return $this->render('index', ['data' => $data]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
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
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    //Halaman Destinasi
    public function actionKuliner()
    {
        $query = Kuliner::find();
        $countQuery = Kuliner::find()->count();
        $pages = new Pagination(['totalCount' => $countQuery, 'pageSize' => 8]);

        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
        
        $db = Yii::$app->db;
        $data = $db->createCommand('SELECT * FROM `kuliner` ORDER BY `id` DESC')->queryAll();
        return $this->render('kuliner', 
            [
                'data' => $data,
                'models' => $models,
                'pages' => $pages,
            ]
        );
    }
    //Halaman Destinasi
    public function actionDestinasi()
    {
        $query = TblTourism::find();
        $countQuery = TblTourism::find()->count();
        $pages = new Pagination([
            'totalCount' => $countQuery, 
            'pageSize' => 6
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        $db = Yii::$app->db;
        $data = $db->createCommand('SELECT * FROM `tbl_tourism`  ORDER BY `id` DESC')->queryAll();
        return $this->render('destinasi', 
            [
                'data' => $data,
                'models' => $models,
                'pages' => $pages,
            ]
        );
    }

    //Halaman Ekraf
    public function actionEkraf()
    {
        $query = Ekraf::find();
        $countQuery = Ekraf::find()->count();
        $pages = new Pagination([
            'totalCount' => $countQuery, 
            'pageSize' => 8
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $db = Yii::$app->db;
        $data = $db->createCommand('SELECT * FROM `ekraf`')->queryAll();
        return $this->render('ekraf', [
            'data' => $data,
            'models' => $models,
            'pages' => $pages,
        ]);
    }


    //Halaman Artikel/Post
    public function actionArtikel(){
        $query = Post::find();
        $countQuery = Post::find()->count();
        $pages = new Pagination([
            'totalCount' => $countQuery, 
            'pageSize' => 4
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $db = Yii::$app->db;
        $data = $db->createCommand('SELECT * FROM `post`')->queryAll();
        return $this->render('artikel', [
            'data' => $data,
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    //Halaman View
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    
    //Halaman View Ekraf
    public function actionViewekraf($id)
    {
        return $this->render('details', [
            'model' => $this->findModels($id),
        ]);
    }

    //Halaman View kuliner
    public function actionViewkuliner($id)
    {
        return $this->render('detailkuliner', [
            'model' => $this->findModelKuliner($id),
        ]);
    }
    //Halaman View Postingan/Artikel
    public function actionViewartikel($id)
    {
        return $this->render('detailartikel', [
            'model' => $this->findModelArtikel($id),
        ]);
    }


    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('Berhasi', 'Cek email anda untuk verifikasi');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('Error', 'Maaf, kami tidak bisa mengirim email verifikasi.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    protected function findModel($id)
    {
        if (($model = TblTourism::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Halaman yang anda minta tidak tersedia.');
    }
    //find model ekraf
    protected function findModels($id)
    {
        if (($model = Ekraf::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Halaman yang anda minta tidak tersedia.');
    }
    //find model kuliner
    protected function findModelKuliner($id)
    {
        if (($model = Kuliner::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Halaman yang anda minta tidak tersedia.');
    }

    //find model artikel/post
    protected function findModelArtikel($id)
    {
        if (($model = Post::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Halaman yang anda minta tidak tersedia.');
    }
}
