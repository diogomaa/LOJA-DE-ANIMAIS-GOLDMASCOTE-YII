<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lote".
 *
 * @property int $ID_Lote
 * @property int $ID_Produto
 * @property string $Data_Validade
 * @property int $Quantidade
 * @property string $descricao
 *
 * @property Produto $produto
 * @property Stock[] $stocks
 */
class Lote extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lote';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Produto', 'Data_Validade', 'Quantidade', 'descricao'], 'required'],
            [['ID_Produto', 'Quantidade'], 'integer'],
            [['Data_Validade'], 'safe'],
            [['descricao'], 'string', 'max' => 50],
            [['ID_Produto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['ID_Produto' => 'ID_Produto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Lote' => 'ID_Lote',
            'ID_Produto' => 'ID_Produto',
            'Data_Validade' => 'Data_Validade',
            'Quantidade' => 'Quantidade',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::className(), ['ID_Produto' => 'ID_Produto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocks()
    {
        return $this->hasMany(Stock::className(), ['ID_Lote' => 'ID_Lote']);
    }
}
