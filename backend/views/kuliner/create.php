<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kuliner */

$this->title = 'Create Kuliner';
$this->params['breadcrumbs'][] = ['label' => 'Kuliners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kuliner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
