<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\StaffInformation\models\StaffMembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-members-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Staff Members', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'member_id',
            'member_first_name',
            'member_middle_name',
            'member_last_name',
            'father_first_name',
            //'father_middle_name',
            //'father_last_name',
            //'member_cnic',
            //'member_gender',
            //'member_dob',
            //'member_email:email',
            //'member_phone_no_1',
            //'member_phone_no_2',
            //'member_address_line_1',
            //'member_address_line_2',
            //'member_country_id',
            //'member_province_id',
            //'member_city_id',
            //'member_city_zip_code',
            //'company_name_1',
            //'post_name_1',
            //'start_date_1',
            //'end_date_1',
            //'compnay_name_2',
            //'post_name_2',
            //'start_date_2',
            //'end_date_2',
            //'member_joining_date',
            //'member_department_id',
            //'member_designation_id',
            //'member_category_id',
            //'member_experience',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
