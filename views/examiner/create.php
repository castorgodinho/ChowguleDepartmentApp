<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Examiner */

$this->title = 'Create Examiner';
$this->params['breadcrumbs'][] = ['label' => 'Examiners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examiner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
