<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
<<<<<<< HEAD:views/academic-year/index.php
/* @var $searchModel app\models\SearchAcademicYear */
=======
/* @var $searchModel app\models\SearchPaperFaculty */
>>>>>>> 3a39d20b29e21678f8e1dcbcc810e7e8f6231aea:views/paper-faculty/index.php
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

<<<<<<< HEAD:views/academic-year/index.php
            'academic_year_id',
            'year',
=======
            //'paper_faculty_id',
            'paper_id',
            'faculty_id',
            'academic_year_id',
            //'created_at',
            //'updated_at',
>>>>>>> 3a39d20b29e21678f8e1dcbcc810e7e8f6231aea:views/paper-faculty/index.php

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
