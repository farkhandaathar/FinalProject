<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StaffInformation\models\StaffMembers */

$this->title = 'Update Staff Members: ' . $model->member_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->member_id, 'url' => ['view', 'id' => $model->member_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-members-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
