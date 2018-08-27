<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProgramStudent */

$this->title = 'Create Program Student';
$this->params['breadcrumbs'][] = ['label' => 'Program Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="program-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
