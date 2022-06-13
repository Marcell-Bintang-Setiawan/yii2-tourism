<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */
/** @var \common\models\SignUpForm $model */

//use yii\bootstrap4\Html;


use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use backend\assets\LoginAsset;

LoginAsset::register($this);

$this->title = 'Login';
?>

<div class="login">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              
              <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
              <h1>Login</h1>
              <div>
                <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
              </div>
              <div>
                <!-- <input type="password" class="form-control" placeholder="Password" required="" /> -->
                <?= $form->field($model, 'password')->passwordInput() ?>
              </div>
              <div>
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>

                <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>
              
              <div class="clearfix"></div>
              
              <div class="separator">
                <p class="change_link">New to site?
                  <a href="<?= Url::to(['site/signup']); ?>" class="to_register"> Create Account </a>
                </p>
                
                
                
                
              </div>
              <?php ActiveForm::end(); ?>
          </section>
        </div>


        <div id="register" class="animate form registration_form">
          <section class="login_content">
            
          <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
              <h1>Create Account</h1>
              <div>
                <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
              </div>
               
              <div>
                
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
      </div>
    </div>