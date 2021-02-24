<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <!-- <p>Please fill out the followign fields to signup:</p> -->
    <!-- <div class="row">
        <div class="col-lg-5"> -->

            <?php $form = ActiveForm::begin(['id' => 'form-signup']) ?>
                <?= $form->field($model, 'first_name')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'last_name')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'address')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'no_hp')->textInput(['autofocus' => true, 'type' => 'number']) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <div class="form-group">
                    <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            
        </div>
    </div>
</div>