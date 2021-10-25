<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Venda */

$this->title = 'Update Venda: ' . $model->ID_Venda;
$this->params['breadcrumbs'][] = ['label' => 'Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Venda, 'url' => ['view', 'id' => $model->ID_Venda]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="venda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
