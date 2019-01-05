<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DuyurugonderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duyurugonder-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sendername') ?>

    <?= $form->field($model, 'senderposition') ?>

    <?= $form->field($model, 'senderemail') ?>

    <?= $form->field($model, 'senderid') ?>

    <?php // echo $form->field($model, 'senderdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
