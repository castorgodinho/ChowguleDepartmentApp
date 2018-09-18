<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'student_id',
            'name',
            'roll_no',
            'phone_no',
            'email',
            //'created_at',
            //'updated_at',
            //'status',
           
        ],
    ]) ?>

</div>
