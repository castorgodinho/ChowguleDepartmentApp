<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProgramStudent */

$this->title = $model->program_student_id;
$this->params['breadcrumbs'][] = ['label' => 'Program Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->program_student_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->program_student_id], [
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
            //'program_student_id',
            'program_id',
            'student_id',
            //'created_at',
            //'updated_at',
            //'status',
        ],
    ]) ?>

</div>
