<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuliner */

$this->title = 'Ubah Data Kuliner: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Kuliner', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah Data Kuliner';
?>
<div class="kuliner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
