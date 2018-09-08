<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Seminar */

$this->title = 'Create Seminar';
$this->params['breadcrumbs'][] = ['label' => 'Seminars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seminar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
