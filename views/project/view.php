<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'project_id',
            'approval_id',
            'name',
            'start_date',
            'end_date',
            'agency_name',
            'duration',
            'amount',
            'faculty_name:ntext',
            'student_name:ntext',
            'department.name',
            'academicYear.year',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
