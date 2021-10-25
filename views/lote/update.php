<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lote */

$this->title = 'Update Lote: ' . $model->ID_Lote;
$this->params['breadcrumbs'][] = ['label' => 'Lotes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_Lote, 'url' => ['view', 'id' => $model->ID_Lote]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lote-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
