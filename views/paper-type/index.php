<style>
    h1{
        display: inline-block;
    }
    p{
        display: inline-block;
        float:right;
        margin-top:30px;
    }
</style>
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPaperType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assign Type';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ Add Assign Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'paper_type_id',
            
            [
                'label' => 'Paper Name',
                'value' => 'paper.name',
                'attribute' => 'paper_id',
            ],
            
            [
                'label' => 'Type Name',
                'value' => 'type.name',
                'attribute' => 'type_id',
            ],
        
            [
                'label' => 'Academic Year Name',
                'value' => 'academicYear.year',
                'attribute' => 'academic_year_id',
            ],
            
          // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
