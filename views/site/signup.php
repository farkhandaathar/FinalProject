<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = Yii::t('rbac-admin', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
<div style="padding-left: 100px;">
    <h1 style="padding-left:50px;"><?= Html::img('@web/images/logo.png', ['width'=>'150px;', 'alt'=> 'My College;']) ?></h1>
    <h3 style="text-transform:uppercase;  font-weight:bold; font-family:Georgia "><span style="color:red";>Graduate</span> <span style="color:blue";>School<span></h3> 
    
    <p>Please fill out the following fields to Signup:</p>
    </div>
    <?= Html::errorSummary($model)?>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'retypePassword')->passwordInput() ?>

                <div style="color:#999;margin:1em 0">
                    
                    Already Have an account <?= Html::a('login', ['/site/login']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('rbac-admin', 'Signup'), ['class' => 'btn btn-primary btn-block', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

