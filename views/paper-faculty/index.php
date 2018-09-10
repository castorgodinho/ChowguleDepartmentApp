<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPaperFaculty */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paper Faculties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-faculty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'paper_faculty_id',
            [
                'label' => 'Paper Name',
                'value' => 'paper.name',
                'attribute' => 'paper_id',
            ],
            [
                'label' => 'Faculty Name',
                'value' => 'faculty.name',
                'attribute' => 'faculty_id',
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
