<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Paper */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'paper_id',
            'name',
            //'program_id',
            //'created_at',
            //'updated_at',
            //'status',
        ],
    ]) ?>

</div>
