<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Duyurugonder */

$this->title = 'Create Duyurugonder';
$this->params['breadcrumbs'][] = ['label' => 'Duyurugonders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duyurugonder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
