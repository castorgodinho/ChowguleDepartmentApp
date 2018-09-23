<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use yii\grid\GridView;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

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

    <?php $form = ActiveForm::begin([
        'method' => 'GET',
    ]); ?>
        <div class="row" >
            <div class="col-md-3">
                <p>From Year: </p>
            <?= DatePicker::widget([
                'name' => 'from',
                'template' => '{addon}{input}',

                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy',
                ]
            ]); ?>
            </div>
            <div class="col-md-3" >
            <p>To Year: </p>
            <?= DatePicker::widget([
                'name' => 'to',
                'template' => '{addon}{input}',

                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy',
                ]
            ]); ?>
            
            </div>
            <div class="col-md-3" style="padding:29px 0px 0px 20px;">
                <?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>
                
            </div>
        </div>
        
     <?php ActiveForm::end(); ?>
    <div class="text-right">
        <p><b>Search Result: </b>
        <?php 
            if($searchModel->to != "" && $searchModel->from != ""){
                echo date('Y', strtotime($searchModel->from)) . " - ". date('Y', strtotime($searchModel->to)) ;
            }else{
                echo "None";
            }
        ?>
    </p>
    </div>

    <?=
        GridView::widget([
     
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'autoXlFormat'=>true,
        'export'=>[
        'label' => 'Export',
        'fontAwesome'=>true,
        'showConfirmAlert'=>false,
        'target'=>GridView::TARGET_BLANK
        ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

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
            

            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'pjax'=>true,
        'showPageSummary'=>false,
        'panel'=>[
            
            'heading'=> $this->title,
           
        ]
    ]); ?>


</div>
