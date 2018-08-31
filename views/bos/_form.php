<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Department;
use app\models\AcademicYear;

/* @var $this yii\web\View */
/* @var $model app\models\Bos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minutes')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'department_id')->dropDownList(
        ArrayHelper::map(Department::find()->all(),'department_id','name'),
        ['prompt'=>'select ']
    )?>

    <?= $form->field($model, 'academic_year_id')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->all(),'academic_year_id','year'),
        ['prompt'=>'select ']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
