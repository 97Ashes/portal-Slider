<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Duyurupaneli */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="duyurupaneli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'duyuruname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senderid')->textInput() ?>

    <?= $form->field($model, 'sendername')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
