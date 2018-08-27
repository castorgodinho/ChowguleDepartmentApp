<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Organization;
use app\models\Student;
use nex\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\StudentOrganization */
/* @var $form yii\widgets\ActiveForm */// 
?>

<div class="student-organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organization_id')->dropDownList(
        ArrayHelper::map(Organization::find()->all(),'organization_id','company_name'),
        ['prompt'=>'select ']
    ) ?>

    <?= $form->field($model, 'student_id')->dropDownList(
        ArrayHelper::map(Student::find()->all(),'student_id','name'),
        ['prompt'=>'select ']
    ) ?>

    <?= $form->field($model, 'date_of_joining')->textInput() ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
