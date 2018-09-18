
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchPaper */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Course';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-index">

    <h1 ><?= Html::encode($this->title) ?>
        <a style="float:right" href="index.php?r=paper/create" class="btn btn-success">
        <span  class="glyphicon glyphicon-plus" ></span> Add Course</a>
        
   </h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'paper_id',
            'name',
            [
                'label' => 'Program Name',
                'value' => 'program.name',
                'attribute' => 'program_id',
            ],
            
           'credit',
           'marks',
            //'created_at',
            //'updated_at',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
