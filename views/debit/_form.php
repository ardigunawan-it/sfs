<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Debit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="debit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'total_debit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'saldo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'credit_id_credit')->textInput() ?>

    <?= $form->field($model, 'fish_id_fish')->textInput() ?>

    <?= $form->field($model, 'weigh_id_weigh')->textInput() ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
