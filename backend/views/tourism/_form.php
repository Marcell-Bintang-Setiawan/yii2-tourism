<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\TblTourism */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-tourism-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'] ]); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'jam')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tiket')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>


    <?= Html::img('../../../frontend/web/uploads/' . $model->gambar, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5', 'width'=> '150px']) ?>

    <?= $form->field($model, 'gambar1')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
