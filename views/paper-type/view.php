<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PaperType */


$this->params['breadcrumbs'][] = ['label' => 'Paper Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-type-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'paper_type_id',
            'paper.name',
            'type.name',
            'academicYear.year',
           // 'status',
        ],
    ]) ?>

</div>
