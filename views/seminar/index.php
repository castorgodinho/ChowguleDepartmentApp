<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchSeminar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seminars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seminar-index">

<h1><?= Html::encode($this->title) ?> <a Style="float:right" href="index.php?r=seminar/create" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span> Add Seminar</a></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'seminar_id',
            'speaker_name:ntext',
            'start_date',
            'end_date',
            'participant:ntext',
            'venue',
            
            [
                'label' => 'inhouse',
                'attribute' => 'inhouse',
                'value' => function($dataProvider){
                    if($dataProvider->inhouse == 0){
                            return 'Not-Inhouse';
                    }else{
                        return "In-House";
                    }

                }
            ],

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
