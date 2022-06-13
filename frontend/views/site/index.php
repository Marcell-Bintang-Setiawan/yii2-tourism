<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;
/** @var yii\web\View $this */

$this->title = 'Explore Sda.';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col d-block">
                <div class=" text-center">
                    <h1 class="display-4 font-weight-normal" style="font-family: sans-serif;">🗺 Selamat Datang 👋</h1>
                    <p class="lead">Kami hadir untuk mengembangkan, memajukan potensi Kota Sidoarjo </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col p-4">
                <h1 class="">Destinasi Pilihan</h1>
                <hr>

                <div class="row">
                    <?php foreach ($data as $r) : ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top p-1" src="<?= Yii::$app->request->baseUrl ?>/uploads/<?= $r['gambar'] ?>" alt="Card image cap">

                                <div class="card-body">

                                    <h5 class="card-title"><?= $r['nama'] ?></h5>
                                    <p class="card-text">Waktu : <?= $r['jam'] ?></p>
                                    <p class="card-text">Tiket : <?= $r['tiket'] ?></p>
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $r['id']]) ?>" class="btn btn-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
        
        <section >
        <div class="row">
            <div class="col">
                <h1>Gallery</h1>
                <hr>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top p-2" src="<?= Yii::$app->request->baseUrl ?>/img/borobudur.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
        </section>

        <div class="row mt-3">
            <div class="col">
                <h1>Apa Kata Mereka</h1>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 580px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= Yii::$app->request->baseUrl ?>/img/jayandarup.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Monumen Jayandaru, Landmark Kota Sidoarjo</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">by John Smith</small><br>
                                    <small class="text-muted">Influencer</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 580px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= Yii::$app->request->baseUrl ?>/img/bandengpresto.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Bandeng Presto, Hanya dari Sidoarjo🥰</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">by John Smith</small><br>
                                    <small class="text-muted">Influencer</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>