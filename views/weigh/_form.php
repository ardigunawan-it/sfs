<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Weigh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="weigh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'qty_weigh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
