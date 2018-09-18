<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchAgency */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agencies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agency-index">

<h1 ><?= Html::encode($this->title) ?>
<a style="float:right" href="index.php?r=agency/create" class="btn btn-success">
<span  class="glyphicon glyphicon-plus" ></span> Add Agency</a>

</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'agency_id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
