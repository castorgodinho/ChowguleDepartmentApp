<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchProgramStudent */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Program Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Program Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
            'value' => function($dataProvider){
                if($dataProvider->academicYear->year == "2018"){
                    return "hi";
                }else{
                    return "bye";
                }
            }
            ],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
