<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\Courses\models\PreviousDegrees */

$this->title = $model->degree_id;
$this->params['breadcrumbs'][] = ['label' => 'Previous Degrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="previous-degrees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'degree_id' => $model->degree_id, 'degree_name' => $model->degree_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'degree_id' => $model->degree_id, 'degree_name' => $model->degree_name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'degree_id',
            'degree_name',
            'degree_duration',
            'created_at',
            'created_by',
        ],
    ]) ?>

</div>
