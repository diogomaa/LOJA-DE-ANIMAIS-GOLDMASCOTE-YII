<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Linhapedido */

$this->title = 'Criar Linha Pedido';
$this->params['breadcrumbs'][] = ['label' => 'Linha Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="linhapedido-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
