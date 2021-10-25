<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property int $ID_Categoria
 * @property int $Nome
 * @property int $Designativo
 * @property int $ID_IVA
 *
 * @property Iva $iva
 * @property Produto[] $produtos
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'Designativo', 'ID_IVA'], 'required'],
            [['ID_IVA'], 'integer'],
            [['Nome', 'Designativo'],'string', 'max' => 50],
            [['ID_IVA'], 'exist', 'skipOnError' => true, 'targetClass' => Iva::className(), 'targetAttribute' => ['ID_IVA' => 'ID_IVA']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Categoria' => 'ID_Categoria',
            'Nome' => 'Nome',
            'Designativo' => 'Designativo',
            'ID_IVA' => 'ID_IVA',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIva()
    {
        return $this->hasOne(Iva::className(), ['ID_IVA' => 'ID_IVA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['ID_Categoria' => 'ID_Categoria']);
    }
}
