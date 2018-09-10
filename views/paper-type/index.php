<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPaperType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paper Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Paper Type', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'created_at',
          // 'updated_at',
          // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
