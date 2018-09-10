<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Paper;
use app\models\Type;
use app\models\AcademicYear;

/* @var $this yii\web\View */
/* @var $model app\models\PaperType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paper-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'paper_id')->dropDownList(
		ArrayHelper::map(Paper::find()->where(['status'=>1])->all(),'paper_id','name'),
		['prompt'=>'select']
	) ?>

    <?= $form->field($model, 'type_id')->dropDownList(
		ArrayHelper::map(Type::find()->where(['status'=>1])->all(),'type_id','name'),
		['prompt'=>'select']
	) ?>

    <?= $form->field($model, 'academic_year_id')->dropDownList(
		ArrayHelper::map(AcademicYear::find()->all(),'academic_year_id','year'),
		['prompt'=>'select']
	) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
