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
/* @var $searchModel app\models\SearchStudentActivity */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ Add Student Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'student_activity_id',
            'name',
            'budget',
            
            [
                'label'=>'Start Date',
                'value'=>function($model){
                    return date('d M Y', strtotime($model->start_date));
                },
                'attribute' => 'start_date',
            ],
          
            [
                'label'=>'End Date',
                'value'=>function($model){
                    return date('d M Y', strtotime($model->end_date));
                },
                'attribute' => 'end_date',
            ],
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
