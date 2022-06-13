<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ekraf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ekraf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <?= Html::img('../../../frontend/web/uploads/' . $model->gambar, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5', 'width'=> '150px']) ?>

    <?= $form->field($model, 'gambar2')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
