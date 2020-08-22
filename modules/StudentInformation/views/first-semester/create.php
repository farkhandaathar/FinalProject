<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\FirstSemester */

$this->title = 'Create First Semester';
$this->params['breadcrumbs'][] = ['label' => 'First Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="first-semester-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
