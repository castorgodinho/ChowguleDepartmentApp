<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchExaminer */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Examiners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examiner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Examiner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'examiner_id',
            'name',
            'faculty_name:ntext',
            'venue',
            'start_date',
            'end_date',
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
