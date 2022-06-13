<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ekraf */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Ekraf', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekraf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
