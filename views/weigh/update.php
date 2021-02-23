<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Weigh */

$this->title = 'Update Weigh: ' . $model->id_weigh;
$this->params['breadcrumbs'][] = ['label' => 'Weighs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_weigh, 'url' => ['view', 'id' => $model->id_weigh]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weigh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
