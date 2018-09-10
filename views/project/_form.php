<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Department;
use app\models\AcademicYear;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'approval_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->widget(DatePicker::className(), [
    'model' => $model,
    'attribute' => 'start_date',
        'clientOptions' => [
            'autoclose' => false,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    

    <?= $form->field($model, 'end_date')->widget(DatePicker::className(), [
    'model' => $model,
    'attribute' => 'end_date',
        'clientOptions' => [
            'autoclose' => false,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    

    <?= $form->field($model, 'agency_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'faculty_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'student_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'department_id')->dropDownList(
		ArrayHelper::map(Department::find()->where(['status'=>1])->all(),'department_id','name'),
        ['prompt'=>'select']
    )?>

    <?= $form->field($model, 'academic_year_id')->dropDownList(
		ArrayHelper::map(AcademicYear::find()->where(['status'=>1])->all(),'academic_year_id','year'),
		['prompt'=>'select']
	) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
