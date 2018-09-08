<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Examiner */

$this->title = 'Update Examiner';
$this->params['breadcrumbs'][] = ['label' => 'Examiners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->examiner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="examiner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>