<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchStudent */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?> <a Style="float:right" href="index.php?r=student/create" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span> Add Student</a></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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

            //'student_id',
            'name',
            'roll_no',
            'phone_no',
            'email',
            //'created_at',
            //'updated_at',
            //'status',
            

            ['class' => 'kartik\grid\ActionColumn'],
        ],
        'pjax'=>true,
        'showPageSummary'=>false,
        'panel'=>[
            
            'heading'=> $this->title,
           
        ]
    ]); ?>

</div>
