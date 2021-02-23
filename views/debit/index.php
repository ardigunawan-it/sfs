<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DebitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Debits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Debit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_debit',
            'total_debit',
            'date',
            'saldo',
            'credit_id_credit',
            //'fish_id_fish',
            //'weigh_id_weigh',
            //'user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
