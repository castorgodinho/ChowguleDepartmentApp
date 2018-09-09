<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PaperFaculty */

$this->title = 'Update Paper Faculty';
$this->params['breadcrumbs'][] = ['label' => 'Paper Faculties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->paper_faculty_id, 'url' => ['view', 'id' => $model->paper_faculty_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paper-faculty-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
