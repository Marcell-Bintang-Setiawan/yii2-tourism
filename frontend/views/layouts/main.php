<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top text-weight-bold',
            ],
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Destinasi', 'url' => ['/site/destinasi']],
            ['label' => 'Ekraf', 'url' => ['/site/ekraf']],
            ['label' => 'Kuliner', 'url' => ['/site/kuliner']],
            ['label' => 'Artikel', 'url' => ['/site/artikel']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ];
        // if (Yii::$app->user->isGuest) {
        //     $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        // } else {
        //     $menuItems[] = '<li>'
        //         . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
        //         . Html::submitButton(
        //             'Logout (' . Yii::$app->user->identity->username . ')',
        //             ['class' => 'btn btn-link logout']
        //         )
        //         . Html::endForm()
        //         . '</li>';
        // }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ml-auto'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">

        <?php

        if (Url::current() == Url::to(['/site/index'])) {
            echo '<div class="jumbotron jumbotron-fluid" style="background-size: cover; padding-bottom: 150px; background-image:url( '. Yii::$app->request->baseUrl  .'/img/jayandaru.jpg)">';
            echo '<div class="container">
                <h1 class="display-4 mt-5 font-wight-normal text-light ">Selamat Datang di <span class="font-weight-bold">Explore Sda.</span></h1>
                <p class="lead text-light">Mari Jelajahi Potensi Kota Sidoarjo</p>
            </div>';
            echo ' </div>';
        }
        elseif(Url::current() == Url::to(['/site/about'])){
            echo '<div class="jumbotron jumbotron-fluid" style="background-size: cover; padding-bottom: 150px; background-image:url( '. Yii::$app->request->baseUrl  .'/img/pura3.jpg)">';
            echo '<div class="container">
                <h1 class="display-4 mt-5 font-wight-normal text-light ">About Us <span class="font-weight-bold">Explore Sda.</span></h1>
                <p class="lead text-light">Explore Sda. adalah sebuah website yang menyediakan informasi mengenai kota sidoarjo</p>
            </div>';
            echo ' </div>';
        }
        elseif(Url::current() == Url::to(['/site/contact'])){
            echo '<div class="jumbotron jumbotron-fluid" style="background-size: cover; padding-bottom: 150px; background-image:url( '. Yii::$app->request->baseUrl  .'/img/borobudur.jpg)">';
            echo '<div class="container">
                <h1 class="display-4 mt-5 font-wight-normal text-light ">Contact Us</h1>
                
            </div>';
            echo ' </div>';
        }
        elseif(Url::current() == Url::to(['/site/ekraf'])){
            echo '<div class="jumbotron jumbotron-fluid" style="background-size: cover; padding-bottom: 150px; background-image:url( '. Yii::$app->request->baseUrl  .'/img/ekraf5.png)">';
            echo '<div class="container">
                <h1 class="display-4 mt-5 font-wight-bold text-light">Ekonomi Kreatif</h1>
                
            </div>';
            echo ' </div>';
        }
        elseif(Url::current() == Url::to(['/site/destinasi'])){
            echo '<div class="jumbotron jumbotron-fluid" style="background-size: cover; padding-bottom: 150px; background-image:url( '. Yii::$app->request->baseUrl  .'/img/destinasi.jpg)">';
            echo '<div class="container">
                        <h1 class="display-4 mt-5 font-wight-normal text-light ">Destinasi Wisata</h1>
                        
                    </div>';
            echo ' </div>';
        }
        elseif(Url::current() == Url::to(['/site/kuliner'])){
            echo '<div class="jumbotron jumbotron-fluid" style="background-size: cover; padding-bottom: 150px; background-image:url( '. Yii::$app->request->baseUrl  .'/img/kuliner2.jpg)">';
            echo '<div class="container">
                        <h1 class="display-4 mt-5 font-wight-normal text-light ">Kuliner</h1>
                    </div>';
            echo ' </div>';
        }
        elseif(Url::current() == Url::to(['/site/artikel'])){
            echo '<div class="jumbotron jumbotron-fluid" style="background-size: cover; padding-bottom: 150px; background-image:url( '. Yii::$app->request->baseUrl  .'/img/post.jpg)">';
            echo '<div class="container">
                        <h1 class="display-4 mt-5 font-wight-normal text-light ">Artikel</h1>
                    </div>';
            echo ' </div>';
        }

        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted bg-dark">
        <div class="container ">
            <p class="float-left text-light">&copy; Made With ❤ <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

<!-- include script js -->
<script src="<?= Yii::$app->request->baseUrl ?>/js/main.js"></script>


</html>
<?php $this->endPage();
