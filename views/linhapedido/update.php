<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Linhapedido */

$this->title = 'Update Linhapedido: ' . $model->ID_Linha;
$this->params['breadcrumbs'][] = ['label' => 'Linha Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Linha, 'url' => ['view', 'id' => $model->ID_Linha]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="linhapedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
