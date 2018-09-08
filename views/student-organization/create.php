<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentOrganization */

$this->title = 'Create Student Organization';
$this->params['breadcrumbs'][] = ['label' => 'Student Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-organization-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>