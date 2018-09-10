<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Program;

/* @var $this yii\web\View */
/* @var $model app\models\Paper */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paper-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['style'=>'width:50%;']) ?>

   <?= $form->field($model, 'program_id')->dropDownList(
        ArrayHelper::map(Program::find()->all(),'program_id','name'),
        ['prompt'=>'select ',
        'contentOptions' => ['style' => 'width:50%; '],]
   )
   
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
