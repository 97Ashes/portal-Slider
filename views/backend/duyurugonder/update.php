<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Duyurugonder */

$this->title = 'Update Duyurugonder: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Duyurugonders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'senderid' => $model->senderid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="duyurugonder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
