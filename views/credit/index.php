<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CreditSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Credits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Credit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_credit',
            'total_credit',
            'date',
            'status_credit',
            'end_time',
            //'paket_id_paket',
            //'user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
