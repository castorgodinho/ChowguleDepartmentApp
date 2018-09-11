
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchRevision */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Revisions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="revision-index">

<h1 ><?= Html::encode($this->title) ?>
<a style="float:right" href="index.php?r=revision/create" class="btn btn-success">
<span  class="glyphicon glyphicon-plus"></span> Add Revision</a>

</h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'revision_id',
            'syllabus_file:ntext',
            
            [
                'label'=>'Syllabus Date',
                'value'=>function($model){
                    return date('d M Y', strtotime($model->syllabus_date));
                },
                'attribute' => 'syllabus_date',
            ],
            //'paper_id',
            //'created_at',
            //'updated_at',
            //'status',
            //'academic_year_id',
            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>
</div>
