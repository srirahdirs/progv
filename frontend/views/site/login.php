<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<body class="cyan">
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->


        
        <div id="login-page" class="row">
            <div class="col s12 z-depth-5 card-panel">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <div class="row">
                        <div class="input-field col s12 center">
                            <img src="../../web/materialize/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
                            <p class="center login-form-text">Programmed-V</p>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-social-person-outline prefix"></i>
                            <!--<input id="username" type="text">-->
                            <!--<label for="username" class="center-align">Username</label>-->
                             <?= $form->field($model, 'username')->textInput(['id'=>'login-username'])->label('Username',['class'=>'login-label']) ?>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            <!--<input id="password" type="password">-->
                            <!--<label for="password">Password</label>-->
                             <?= $form->field($model, 'password')->passwordInput(['id'=>'login-password'])->label('Password',['class'=>'login-label'])  ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <!--<a href="index-2.html" class="btn waves-effect waves-light col s12">Login</a>-->
                             <?= Html::submitButton('Login', ['class' => 'btn waves-effect waves-light col s12', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
                        </div>          
                    </div>
                <?php ActiveForm::end(); ?>
                <!--</form>-->
            </div>
        </div>

    </body>

