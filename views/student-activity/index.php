<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchStudentActivity */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'student_activity_id',
            'name',
            'budget',
            'start_date',
            'end_date',
            //'faculty_name:ntext',
            //'student_name:ntext',
            //'department_id',
            //'academic_year_id',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
