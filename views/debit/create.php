<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Debit */

$this->title = 'Create Debit';
$this->params['breadcrumbs'][] = ['label' => 'Debits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
