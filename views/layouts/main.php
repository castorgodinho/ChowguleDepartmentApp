<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'program', 'url' => ['/program/index']],
            ['label' => 'program_student', 'url' => ['/program-student/index']],
            ['label' => 'student', 'url' => ['/student/index']],
            ['label' => 'student_organization', 'url' => ['/student-organization/index']],
            ['label' => 'organization', 'url' => ['/organization/index']],
            ['label' => 'academic year', 'url' => ['/academic-year/index']],
            ['label' => 'appointment', 'url' => ['/appointment/index']],
            ['label' => 'auditing_member', 'url' => ['/auditing-member/index']],
            ['label' => 'bos', 'url' => ['/bos/index']],
            ['label' => 'department', 'url' => ['/department/index']],
            ['label' => 'event', 'url' => ['/event/index']],
            ['label' => 'examinar', 'url' => ['/examinar/index']],
            ['label' => 'faculty', 'url' => ['/faculty/index']],
            ['label' => 'paper', 'url' => ['/paper/index']],
            ['label' => 'paper-faculty', 'url' => ['/paper-faculty/index']],
            ['label' => 'paper_type', 'url' => ['/paper-type/index']],
            ['label' => 'revision', 'url' => ['/revision/index']],
            ['label' => 'seminar', 'url' => ['/seminar/index']],
            ['label' => 'subject_expert', 'url' => ['/subject-expert/index']],
            ['label' => 'type', 'url' => ['/type/index']],
            ['label' => 'workshop', 'url' => ['/workshop/index']],
            
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; FO$$ <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
