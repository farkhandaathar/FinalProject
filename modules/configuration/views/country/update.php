<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Country */

$this->title = 'Update Country: ' . $model->country_id;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country_id, 'url' => ['view', 'id' => $model->country_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
