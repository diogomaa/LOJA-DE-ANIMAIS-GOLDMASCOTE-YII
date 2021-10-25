<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iva".
 *
 * @property int $ID_IVA
 * @property int $iva
 *
 * @property Categoria[] $categorias
 * @property Produto[] $produtos
 * @property Linhapedido[] $linhapedidos
 */
class Iva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'iva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iva'], 'required'],
            [['iva'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_IVA' => 'ID_IVA',
            'iva' => 'Iva',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategorias()
    {
        return $this->hasMany(Categoria::className(), ['ID_IVA' => 'ID_IVA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['ID_IVA' => 'ID_IVA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinhapedidos()
    {
        return $this->hasMany(Linhapedido::className(), ['ID_IVA' => 'ID_IVA']);
    }
}
