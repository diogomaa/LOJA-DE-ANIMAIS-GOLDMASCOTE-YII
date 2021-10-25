<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\LinhapedidoSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Venda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'value' => function($model,$key,$index,$column){
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function($model,$key,$index,$column){
                    $searchModel = new LinhapedidoSearch();
                    $searchModel->ID_Venda = $model->ID_Venda;
                    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                    return Yii::$app->controller->renderPartial('_linhaPedido',[
                        'searchModel' => $searchModel,
                        'dataProvider' =>$dataProvider,
                    ]);
                },
            ],

            'ID_Venda',
            'ID_Cliente',
            'Data_Venda',
            'Total_Com_IVA',
            'Total_Sem_IVA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
