<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = Yii::t('rbac-admin', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
  
<div class="site-login">
<div style="padding-left:100px;">
    <h1 style="padding-left:50px;"><?= Html::img('@web/images/logo.png', ['width'=>'150px;', 'alt'=> 'My College;']) ?></h1>
    <h3 style="text-transform:uppercase;  font-weight:bold; font-family:Georgia "><span style="color:red";>Graduate</span> <span style="color:blue";>School<span></h3> 



    <p style="color:black; text-align-center;">Please fill out the following fields to login:</p>
</div>
    <div class="row d-flex justify-content-center">
        <div class="col col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['user/request-password-reset']) ?>.
                    For new user you can <?= Html::a('signup', ['/site/signup']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('rbac-admin', 'Login'), ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
