<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EkrafSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tabel Ekonomi Kreatif';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekraf-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'lokasi',
            'harga',
            'gambar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Ekraf $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
