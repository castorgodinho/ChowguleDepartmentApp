<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchProgramStudent */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Program Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-student-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Program Student', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'program_student_id',
           'program.name',
           'student.name',
          // 'created_at',
          // 'updated_at',
          // 'status',
           'academicYear.year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
