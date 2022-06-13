<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KulinerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kuliner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuliner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Kuliner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,s
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'harga',
            'lokasi:ntext',
            'deskripsi:ntext',
            'gambar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Kuliner $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

</div>
