<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Stock */

$this->title = 'Update Stock: ' . $model->ID_Stock;
$this->params['breadcrumbs'][] = ['label' => 'Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Stock, 'url' => ['view', 'id' => $model->ID_Stock]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
