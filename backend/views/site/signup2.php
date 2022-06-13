<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use backend\assets\LoginAsset;

LoginAsset::register($this);

$this->title = 'Signup';
?>

    <div id="register" class="animate form registration_form login">
          <section class="login_content">
            
          <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
              <h1>Create Account</h1>
              <div>
                <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
              </div>
              <div>
                <?= $form->field($model, 'email')?>
              </div>

              <div>
                <?= $form->field($model, 'password')->passwordInput() ?>
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
              <?php ActiveForm::end(); ?>
          </section>
    </div>