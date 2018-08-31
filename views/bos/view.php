<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bos */

$this->title = $model->bos_id;
$this->params['breadcrumbs'][] = ['label' => 'Bos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->bos_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->bos_id], [
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
            //'bos_id',
            'program',
            'minutes:ntext',
            'date',
            'department_id',
            'academic_year_id',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
