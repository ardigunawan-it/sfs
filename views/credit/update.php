<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Credit */

$this->title = 'Update Credit: ' . $model->id_credit;
$this->params['breadcrumbs'][] = ['label' => 'Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_credit, 'url' => ['view', 'id' => $model->id_credit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="credit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
