<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "linhapedido".
 *
 * @property int $ID_Linha
 * @property int $ID_Venda
 * @property int $ID_Stock
 * @property int $Quantidade
 * @property double $Total_Sem_IVA
 * @property double $Total_Com_IVA
 * @property int $ID_IVA
 *
 * @property Venda $venda
 * @property Stock $stock
 * @property Iva $iva
 */
class Linhapedido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'linhapedido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Venda', 'ID_Stock', 'Quantidade', 'Total_Sem_IVA', 'Total_Com_IVA', 'ID_IVA'], 'required'],
            [['ID_Venda', 'ID_Stock', 'Quantidade', 'ID_IVA'], 'integer'],
            [['Total_Sem_IVA', 'Total_Com_IVA'], 'number'],
            [['ID_Venda'], 'exist', 'skipOnError' => true, 'targetClass' => Venda::className(), 'targetAttribute' => ['ID_Venda' => 'ID_Venda']],
            [['ID_Stock'], 'exist', 'skipOnError' => true, 'targetClass' => Stock::className(), 'targetAttribute' => ['ID_Stock' => 'ID_Stock']],
            [['ID_IVA'], 'exist', 'skipOnError' => true, 'targetClass' => Iva::className(), 'targetAttribute' => ['ID_IVA' => 'ID_IVA']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Linha' => 'ID_Linha',
            'ID_Venda' => 'ID_Venda',
            'ID_Stock' => 'ID_Stock',
            'Quantidade' => 'Quantidade',
            'Total_Sem_IVA' => 'Total_Sem_IVA',
            'Total_Com_IVA' => 'Total_Com_IVA',
            'ID_IVA' => 'ID_IVA',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVenda()
    {
        return $this->hasOne(Venda::className(), ['ID_Venda' => 'ID_Venda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStock()
    {
        return $this->hasOne(Stock::className(), ['ID_Stock' => 'ID_Stock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIva()
    {
        return $this->hasOne(Iva::className(), ['ID_IVA' => 'ID_IVA']);
    }
}
