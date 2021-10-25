<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LinhapedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Linha Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="linhapedido-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'ID_Linha',
            'ID_Venda',
            'ID_Stock',
            'Quantidade',
            'Total_Sem_IVA',
            //'Total_Com_IVA',
            //'ID_IVA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

