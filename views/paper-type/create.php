<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PaperType */

$this->title = 'Create Paper Type';
$this->params['breadcrumbs'][] = ['label' => 'Paper Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
