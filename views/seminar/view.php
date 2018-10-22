<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Seminar */

//$this->title = $model->speaker_name;
$this->params['breadcrumbs'][] = ['label' => 'Seminars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seminar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'seminar_id',
            'speaker_name:ntext',
            [   
                'label' => 'Start Date',
                'attribute' => 'start_date',
                'value' => function ($model) { 
                    return date("d M Y", strtotime($model->start_date));
                },
            ],
            [   
                'label' => 'End Date',
                'attribute' => 'end_date',
                'value' => function ($model) { 
                    return date("d M Y", strtotime($model->end_date));
                },
            ],
            'participant:ntext',
            'venue',
            [
                'label' => 'inhouse',
                'attribute' => 'inhouse',
                'value' => function($model){
                    if($model->inhouse == 0){
                            return 'Not-Inhouse';
                    }else{
                        return "In-House";
                    }

                }
            ],
            'department.name',
            //'academicYear.year',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
