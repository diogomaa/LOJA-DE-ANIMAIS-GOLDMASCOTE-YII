<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Stock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Quantidade_Inserida')->textInput() ?>

    <?= $form->field($model, 'Quantidade_Existente')->textInput() ?>

    <?= $form->field($model, 'data')->textInput(['type'=> "date"]) ?>

    <?= $form->field($model, 'ID_Lote')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
