<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CreditSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="credit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_credit') ?>

    <?= $form->field($model, 'total_credit') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'status_credit') ?>

    <?= $form->field($model, 'end_time') ?>

    <?php // echo $form->field($model, 'paket_id_paket') ?>

    <?php // echo $form->field($model, 'user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
