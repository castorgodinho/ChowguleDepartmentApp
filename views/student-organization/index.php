<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchStudentOrganization */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumni';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-organization-index">

    <h1><?= Html::encode($this->title) ?> <a Style="float:right" href="index.php?r=student-organization/create" class="btn btn-success">
        <span class="glyphicon glyphicon-plus"></span> Add Alumni</a></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'student_organization_id',
            [
                'label' => 'Organization Name',
                'value' => 'organization.company_name',
                'attribute' => 'organization_id',
                ],
            [
                'label' => 'Student Name',
                'value' => 'student.name',
                'attribute' => 'student_id',
                ],
            [
                'label' => 'Date Of Joining',
                'attribute' => 'date_of_joining',
                'value' => function($model){
                    return date('d M Y', strtotime($model->date_of_joining));
                }
            ],
            
            'position',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
