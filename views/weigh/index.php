<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WeighSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Weighs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weigh-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Weigh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_weigh',
            'qty_weigh',
            'uom',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
