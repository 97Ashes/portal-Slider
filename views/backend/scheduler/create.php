<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Scheduler */

$this->title = 'Create Scheduler';
$this->params['breadcrumbs'][] = ['label' => 'Schedulers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scheduler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
