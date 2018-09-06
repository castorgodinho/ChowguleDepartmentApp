<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SubjectExpert */

$this->title = 'Update Subject Expert: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Subject Experts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subject_expert_id, 'url' => ['view', 'id' => $model->subject_expert_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subject-expert-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
