<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ekraf */

$this->title = 'Update Data: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Ekraf', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ekraf-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
