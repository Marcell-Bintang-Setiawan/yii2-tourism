<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Kuliner - Explore Sda.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-ekraf">
    <h1>Kulineran di sekitar Sidoarjo Yuk 🍜</h1>

    <!-- <p>This is the Ekonomi Kreatif page. You may modify the following file to customize its content:</p> -->
    <div class="row">
        <?php foreach ($models as $d) : ?>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top p-1" src="<?= Yii::$app->request->baseUrl ?>/uploads/<?= $d['gambar'] ?>" alt="Card image cap">
                    <div class="card-body">

                        <h5 class="card-title"><?= $d['nama'] ?></h5>
                        <p class="card-text">Lokasi : <?= $d['lokasi'] ?></p>
                        <p class="card-text">Harga : <?= $d['harga'] ?></p>
                        <a href="<?= Url::toRoute(['site/viewkuliner', 'id' => $d['id']]) ?>" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        
        <div class="col-md-12">
            <?= LinkPager::widget([
                'pagination' => $pages,
                'options' => [
                    'class' => 'pagination justify-content-center'
                ],
                'prevPageCssClass' => 'page-item',
                'prevPageLabel' => 'Previous',
                'nextPageCssClass' => 'page-item',
                'nextPageLabel' => 'Next',
                'disabledPageCssClass' => 'disabled page-link',
                'pageCssClass' => 'page-item',
                'linkOptions' => [
                    'class' => 'page-link'
                ],
            
            ]) ?>
        </div>
    </div>
</div>