<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $ID_Cliente
 * @property string $Nome
 * @property string $Data_Nascimento
 * @property int $Numero_Cartao
 *
 * @property Venda[] $vendas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Data_Nascimento', 'Numero_Cartao'], 'required'],
            [['Data_Nascimento'], 'safe'],
            [['Numero_Cartao'], 'integer'],
            [['Nome'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Cliente' => 'ID_Cliente',
            'Nome' => 'Nome',
            'Data_Nascimento' => 'Data_Nascimento',
            'Numero_Cartao' => 'Numero_Cartao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Venda::className(), ['ID_Cliente' => 'ID_Cliente']);
    }
}
