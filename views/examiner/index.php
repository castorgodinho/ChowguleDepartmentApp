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

    <h1><?= Html::encode($this->title) ?> <a Style="float:right" href="index.php?r=examiner/create" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span> Add Examiner</a></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
