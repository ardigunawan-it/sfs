<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fish */

$this->title = 'Update Fish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fish', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_fish]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
