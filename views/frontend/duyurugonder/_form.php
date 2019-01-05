<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Duyurugonder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duyurugonder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sendername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senderposition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senderemail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senderid')->textInput() ?>

    <?= $form->field($model, 'senderdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
