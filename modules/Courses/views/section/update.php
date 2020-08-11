<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\courses\models\Section */

$this->title = 'Update Section: ' . $model->section_id;
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->section_id, 'url' => ['view', 'section_id' => $model->section_id, 'section_name' => $model->section_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="section-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
