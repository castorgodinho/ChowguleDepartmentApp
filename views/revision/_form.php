<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Paper;
use app\models\AcademicYear;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Revision */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="revision-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'syllabus_file')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'syllabus_date')->widget(DatePicker::className(), [
    'model' => $model,
    'attribute' => 'syllabus_date',
        'clientOptions' => [
            'autoclose' => false,
            'format' => 'yyyy-mm-dd'
        ]
]);?>
    

	<?=$form->field($model,'paper_id')->dropDownList(
		ArrayHelper::map(Paper::find()->all(),'paper_id','name'),
		['prompt'=>'select']
)?>


		<?=$form->field($model,'academic_year_id')->dropDownList(
		ArrayHelper::map(AcademicYear::find()->all(),'academic_year_id','year'),
		['prompt'=>'select']
)?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
