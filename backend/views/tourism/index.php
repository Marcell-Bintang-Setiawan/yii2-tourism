<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap4\Breadcrumbs;
use yii\widgets\LinkPager;
use gentellela\widgets\Linkkpager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblTourismSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tabel Pariwisata';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-tourism-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Lokasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>









    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'jam',
            'tiket',
            'gambar',
            'lokasi',

            // ['class' => ActionColumn::className(),
            //     'template' => '{view} {update} {delete}',
            //     'buttons' => [
            //         'view' => function ($url, $model, $key) {
            //             return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', Url::to(['view', 'id' => $model->id]));
            //         },
            //         'update' => function ($url, $model, $key) {
            //             return Html::a('<span class="glyphicon glyphicon-pencil"></span>', Url::to(['update', 'id' => $model->id]));
            //         },
            //         'delete' => function ($url, $model, $key) {
            //             return Html::a('<span class="glyphicon glyphicon-trash"></span>', Url::to(['delete', 'id' => $model->id]), [
            //                 'data' => [
            //                     'confirm' => 'Are you sure you want to delete this item?',
            //                     'method' => 'post',
            //                 ],
            //             ]);
            //         },
            //     ],
            // ],

            [
                
                'class' => ActionColumn::className(),
                
                'urlCreator' => function ($action, app\models\TblTourism $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
        
    ]); ?> 
    <!-- add pagination -->
    <!-- <?= LinkPager::widget(
        [
            'pagination' => $pagination,
        ]
    ) ?> -->


</div>
