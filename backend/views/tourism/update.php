<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblTourism */

$this->title = 'Ubah Data Pariwisata: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Tabel Pariwisata', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-tourism-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
