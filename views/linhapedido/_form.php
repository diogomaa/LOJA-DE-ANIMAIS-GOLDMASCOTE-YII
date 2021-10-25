<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Linhapedido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="linhapedido-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Venda')->textInput() ?>

    <?= $form->field($model, 'ID_Stock')->textInput() ?>

    <?= $form->field($model, 'Quantidade')->textInput() ?>

    <?= $form->field($model, 'Total_Sem_IVA')->textInput() ?>

    <?= $form->field($model, 'Total_Com_IVA')->textInput() ?>

    <?= $form->field($model, 'ID_IVA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
