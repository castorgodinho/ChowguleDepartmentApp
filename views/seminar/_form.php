<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Department;
use app\models\AcademicYear;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Seminar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seminar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'speaker_name')->textarea(['rows' => 6]) ?>

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

    <?= $form->field($model, 'participant')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'venue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inhouse')->dropDownList(['1' => 'inhouse', '0' => 'not-inhouse'])?>

    <?= $form->field($model, 'department_id')->dropDownList(
        ArrayHelper::map(Department::find()->all(),'department_id','name'),
        ['prompt'=>'select ']
    )?>

    <?= $form->field($model, 'academic_year_id')->dropDownList(
        ArrayHelper::map(AcademicYear::find()->orderBy(['year' => SORT_DESC ])->all(),'academic_year_id','year')
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
