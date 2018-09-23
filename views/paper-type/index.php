
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

    <h1 ><?= Html::encode($this->title) ?>
        <a style="float:right" href="index.php?r=paper-type/create" class="btn btn-success">
    <span  class="glyphicon glyphicon-plus"></span> Add Assign Type</a>

    </h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'paper_type_id',
            
            [
                'label' => 'Course Name',
                'value' => 'paper.name',
                'attribute' => 'paper_id',
            ],
            
            [
                'label' => 'Type Name',
                'value' => 'type.name',
                'attribute' => 'type_id',
            ],
        
            [
                'label' => 'Academic Year',
                'value' => 'academicYear.year',
                'attribute' => 'academic_year_id',
            ],
            
          // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
