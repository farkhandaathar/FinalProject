<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StaffInformation\models\StaffMembers */

$this->title = 'Create Staff Members';
$this->params['breadcrumbs'][] = ['label' => 'Staff Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-members-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
