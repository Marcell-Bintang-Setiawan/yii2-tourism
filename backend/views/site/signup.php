<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup text-center ">
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <div class="login-wrapper">
    <div class="row" style="margin-left: 37%;">
        <div class=" text-center col-lg-5 ">
            <?php $form = ActiveForm::begin(
                ['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-block', 'name' => 'signup-button']) ?>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                        <a href="<?= Url::to(['site/login']); ?>" class="to_register"> Log in </a>
                        </p>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div>
</div>
