<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchSeminar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seminars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seminar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Seminar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'seminar_id',
            'speaker_name:ntext',
            'start_date',
            'end_date',
            'participant:ntext',
            'venue',
            'inhouse',
            'department.name',
            'academicYear.year',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>