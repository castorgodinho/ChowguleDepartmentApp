<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectExpert */

$this->title = $model->subject_expert_id;
$this->params['breadcrumbs'][] = ['label' => 'Subject Experts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-expert-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->subject_expert_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->subject_expert_id], [
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
            //'subject_expert_id',
            'faculty_name',
            'department_id',
            'academic_year_id',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
