<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\StudentInformation\models\SecondSemester */

$this->title = 'Create Second Semester';
$this->params['breadcrumbs'][] = ['label' => 'Second Semesters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="second-semester-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
