<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchBos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bos-index">

   <h1><?= Html::encode($this->title) ?> <a Style="float:right" href="index.php?r=bos/create" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span> Add BOS</a></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'bos_id',
            'program',
            'minutes:ntext',
            [
                'label' => 'Date',
                'attribute' => 'date',
                'value' => function($model){
                    return date('d M Y', strtotime($model->date));
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
