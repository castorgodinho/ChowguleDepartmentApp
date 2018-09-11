<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchAuditingMember */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auditing Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditing-member-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Auditing Member', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'auditing_member_id',
            'name',
            'start_date',
            'end_date',
            'college_name:ntext',
            'program',
            'faculty_name:ntext',
            [
                'label' => 'Department Name',
                'value' => 'department.name',
                'attribute' => 'department_id',
            ],
            [
                'label' => 'Academic Year',
                'value' => 'academicYear.year',
                'attribute' => 'academic_year_id',
            ],
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
