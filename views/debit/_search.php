<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DebitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="debit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_debit') ?>

    <?= $form->field($model, 'total_debit') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'saldo') ?>

    <?= $form->field($model, 'credit_id_credit') ?>

    <?php // echo $form->field($model, 'fish_id_fish') ?>

    <?php // echo $form->field($model, 'weigh_id_weigh') ?>

    <?php // echo $form->field($model, 'user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
