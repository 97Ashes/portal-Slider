<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Duyurupaneli */

$this->title = 'Create Duyurupaneli';
$this->params['breadcrumbs'][] = ['label' => 'Duyurupanelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="duyurupaneli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
