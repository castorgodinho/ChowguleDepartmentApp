<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaperType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paper-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'paper_id')->textInput() ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'academic_year_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
