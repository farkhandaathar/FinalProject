<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\Semesters */

$this->title = 'Update Semesters: ' . $model->semester_id;
$this->params['breadcrumbs'][] = ['label' => 'Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->semester_id, 'url' => ['view', 'id' => $model->semester_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="semesters-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
