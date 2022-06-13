<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Postingan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'judul',
            'preview:ntext',
            'deskripsi:ntext' => [
                'label' => 'Deskripsi',
                'format' => 'html',
                'value' => function($model){
                    return $model->deskripsi;
                }
            ],
            'author',
            'created_at',
        ],
    ]) ?>

</div>
