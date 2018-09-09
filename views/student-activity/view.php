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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->student_activity_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->student_activity_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'student_activity_id',
            'name',
            'budget',
            'start_date',
            'end_date',
            'faculty_name:ntext',
            'student_name:ntext',
            'department_id',
            'academic_year_id',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
