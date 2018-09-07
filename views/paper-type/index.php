<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPaperType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paper Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paper-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Paper Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'paper_type_id',
            'paper_id',
            'type_id',
            'academic_year_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
