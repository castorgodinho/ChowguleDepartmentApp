<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Examiner */

//$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Examiners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examiner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'examiner_id',
            'name',
            'faculty_name:ntext',
            'venue',
            'start_date',
            'end_date',
            'department.name',
            'academicYear.year',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
