<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property int $ID_Stock
 * @property int $Quantidade_Inserida
 * @property int $Quantidade_Existente
 * @property string $data
 * @property int $ID_Lote
 *
 * @property Linhapedido[] $linhapedidos
 * @property Lote $lote
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Quantidade_Inserida', 'Quantidade_Existente', 'data', 'ID_Lote'], 'required'],
            [['Quantidade_Inserida', 'Quantidade_Existente', 'ID_Lote'], 'integer'],
            [['data'], 'safe'],
            [['ID_Lote'], 'exist', 'skipOnError' => true, 'targetClass' => Lote::className(), 'targetAttribute' => ['ID_Lote' => 'ID_Lote']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Stock' => 'ID_Stock',
            'Quantidade_Inserida' => 'Quantidade_Inserida',
            'Quantidade_Existente' => 'Quantidade_Existente',
            'data' => 'Data',
            'ID_Lote' => 'ID_Lote',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinhapedidos()
    {
        return $this->hasMany(Linhapedido::className(), ['ID_Stock' => 'ID_Stock']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLote()
    {
        return $this->hasOne(Lote::className(), ['ID_Lote' => 'ID_Lote']);
    }
}
