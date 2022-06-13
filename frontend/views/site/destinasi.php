<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Destinasi - Explore Sda.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-destinasi">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the Destinasi page. You may modify the following file to customize its content:</p>
    <div class="row">
        <?php foreach ($models as $r) : ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top p-1" src="<?= Yii::$app->request->baseUrl ?>/uploads/<?= $r['gambar'] ?>" alt="Card image cap">
                    <div class="card-body">

                        <h5 class="card-title"><?= $r['nama'] ?></h5>
                        <!-- <p class="card-text">Waktu : <?= $r['jam'] ?></p> -->
                        <!-- <p class="card-text">Tiket : <?= $r['tiket'] ?></p> -->
                        <p class="card-text"><?= $r['lokasi'] ?></p>
                        <a href="<?= Url::toRoute(['site/view', 'id' => $r['id']]) ?>" class="btn btn-primary">Lihat</a>
                    </div>

                    <!-- Modal -->
                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-md-12">
        <?= LinkPager::widget(
            [
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

            ]
        ) ?>
        </div>
    </div>
</div>