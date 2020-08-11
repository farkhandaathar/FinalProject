<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Province */

$this->title = 'Update Province: ' . $model->province_id;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->province_id, 'url' => ['view', 'id' => $model->province_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="province-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
