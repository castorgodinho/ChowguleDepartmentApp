<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Faculty;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Appointment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="appointment-form">

    <?php $form = ActiveForm::begin(); ?>
    <br>
    <?= $form->field($model, 'faculty_id')->dropDownList(
        ArrayHelper::map(Faculty::find()->where(['status'=>1])->all(),'faculty_id','name'),
        ['prompt'=>'select ']
    )?>
    <br>
    <?= $form->field($model, 'date_of_joining')->widget(
    DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    <br>
    <?= $form->field($model, 'date_of_leaving')->widget(
    DatePicker::className(), [
            // inline too, not bad
            'inline' => false, 
            // modify template for custom rendering
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    <br>

    
   
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
