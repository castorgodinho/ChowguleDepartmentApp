<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentActivity */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Student Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-activity-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'student_activity_id',
            'name',
            'budget',
            'start_date',
            'end_date',
            'faculty_name:ntext',
            'student_name:ntext',
            'department.name',
            'academicYear.year',
            //'created_at',
           // 'updated_at',
        ],
    ]) ?>

</div>
