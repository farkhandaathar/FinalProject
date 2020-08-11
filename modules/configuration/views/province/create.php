<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\configuration\models\Province */
"<br>";
$this->title = 'Create Province';
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
