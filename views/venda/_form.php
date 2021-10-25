<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cliente;

/* @var $this yii\web\View */
/* @var $model app\models\Venda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Cliente')->dropDownList(
        ArrayHelper::map(Cliente::find()->all(), 'ID_Cliente','Nome'),
        ['prompt'=>'Select Cliente']
    )?>

    <?= $form->field($model, 'Data_Venda')->textInput(['type'=> "date" ,"value"=>date('Y-m-d') ]) ?>

    <?= $form->field($model, 'Total_Com_IVA')->textInput() ?>

    <?= $form->field($model, 'Total_Sem_IVA')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
