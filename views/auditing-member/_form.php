<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Department;
use app\models\AcademicYear;

/* @var $this yii\web\View */
/* @var $model app\models\AuditingMember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auditing-member-form">

    <?php $form = ActiveForm::begin(); ?>
    <br>
    <br>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'start_date')->widget(
    DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
     <?= $form->field($model, 'end_date')->widget(
    DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'college_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'program')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faculty_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'department_id')->dropDownList(
        ArrayHelper::map(Department::find()->all(),'department_id','name'),
        ['prompt'=>'select ']
    )?>

    <?= $form->field($model, 'academic_year_id')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->all(),'academic_year_id','year'),
        ['prompt'=>'select ']
    )?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
