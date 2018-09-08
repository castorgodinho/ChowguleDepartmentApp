<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bos */

$this->title = $model->bos_id;
$this->params['breadcrumbs'][] = ['label' => 'Bos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bos-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'bos_id',
            'program',
            'minutes:ntext',
            'date',
            'department.name',
            'academicYear.year',
            //'created_at',
            //'updated_at',
        ],
    ]) ?>

</div>
