<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblTourismSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Tourisms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-tourism-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Tourism', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'jam',
            'tiket',
            'gambar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\TblTourism $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
