<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Iva */

$this->title = 'Update Iva: ' . $model->ID_IVA;
$this->params['breadcrumbs'][] = ['label' => 'Ivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_IVA, 'url' => ['view', 'id' => $model->ID_IVA]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="iva-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
