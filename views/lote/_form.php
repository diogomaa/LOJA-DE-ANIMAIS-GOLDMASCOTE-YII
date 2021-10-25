<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lote */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lote-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Produto')->textInput() ?>

    <?= $form->field($model, 'Data_Validade')->textInput(['type'=> "date"]) ?>

    <?= $form->field($model, 'Quantidade')->textInput() ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
