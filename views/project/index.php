
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchProject */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1 ><?= Html::encode($this->title) ?>
        <a style="float:right" href="index.php?r=project/create" class="btn btn-success">
        <span  class="glyphicon glyphicon-plus"></span> Add Project</a>

    </h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'project_id',
            'approval_id',
            'name',
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
            //'agency_name',
            //'duration',
            //'amount',
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
