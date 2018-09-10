<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AuditingMember */

$this->title = 'Create Auditing Member';
$this->params['breadcrumbs'][] = ['label' => 'Auditing Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditing-member-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
