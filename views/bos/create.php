<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bos */

$this->title = 'Create Bos';
$this->params['breadcrumbs'][] = ['label' => 'Bos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>