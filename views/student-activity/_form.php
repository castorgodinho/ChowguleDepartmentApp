<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\AcademicYear;
use app\models\Department;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\StudentActivity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budget')->textInput() ?>

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

    <?= $form->field($model, 'faculty_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'student_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'department_id')->dropDownList(
		ArrayHelper::map(Department::find()->all(),'department_id','name'),
        ['prompt'=>'select']
    )?>

    <?= $form->field($model, 'academic_year_id')->dropDownList(
		ArrayHelper::map(AcademicYear::find()->all(),'academic_year_id','year'),
		['prompt'=>'select']
	) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>