<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblTourism */

$this->title = 'Create Tbl Tourism';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Tourisms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-tourism-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
