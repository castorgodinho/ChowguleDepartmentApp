<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubjectExpert */

$this->title = 'Create Subject Expert';
$this->params['breadcrumbs'][] = ['label' => 'Subject Experts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subject-expert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
