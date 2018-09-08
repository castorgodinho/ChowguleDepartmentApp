<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PaperType */

$this->title = $model->paper_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Paper Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->paper_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->paper_type_id], [
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
            'paper_type_id',
            'paper_id',
            'type_id',
            'academic_year_id',
        ],
    ]) ?>

</div>
