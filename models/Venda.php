<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venda".
 *
 * @property int $ID_Venda
 * @property int $ID_Cliente
 * @property string $Data_Venda
 * @property double $Total_Com_IVA
 * @property double $Total_Sem_IVA
 *
 * @property Linhapedido[] $linhapedidos
 * @property Cliente $cliente
 */
class Venda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'venda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Cliente', 'Data_Venda', 'Total_Com_IVA', 'Total_Sem_IVA'], 'required'],
            [['ID_Cliente'], 'integer'],
            [['Data_Venda'], 'safe'],
            [['Total_Com_IVA', 'Total_Sem_IVA'], 'number'],
            [['ID_Cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['ID_Cliente' => 'ID_Cliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Venda' => 'ID_Venda',
            'ID_Cliente' => 'Cliente',
            'Data_Venda' => 'Data_Venda',
            'Total_Com_IVA' => 'Total_Com_IVA',
            'Total_Sem_IVA' => 'Total_Sem_IVA',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinhapedidos()
    {
        return $this->hasMany(Linhapedido::className(), ['ID_Venda' => 'ID_Venda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['ID_Cliente' => 'ID_Cliente']);
    }
}
