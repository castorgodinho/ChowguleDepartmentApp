<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchProgramStudent */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admission';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-student-index">

    <h1><?= Html::encode($this->title) ?> <a Style="float:right" href="index.php?r=program-student/create" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span> Add Admission</a></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'program_student_id',
           [
               'label' => 'Program Name',
               'value' => 'program.name',
               'attribute' => 'program_id',
           ],
           [
            'label' => 'Student Name',
            'value' => 'student.name',
            'attribute' => 'student_id',
            ],
          // 'created_at',
          // 'updated_at',
          // 'status',
          [
            'label' => 'Academic Year',
            'value' => 'academicYear.year',
            'attribute' => 'academic_year_id',
            ],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
