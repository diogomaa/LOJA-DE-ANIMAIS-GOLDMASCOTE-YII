<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $ID_Produto
 * @property int $ID_IVA
 * @property int $ID_Categoria
 * @property string $Nome
 * @property string $descricao
 * @property double $preco
 *
 * @property Iva $iva
 * @property Categoria $categoria
 * @property Lote[] $lotes
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_IVA', 'ID_Categoria', 'Nome', 'descricao', 'preco'], 'required'],
            [['ID_IVA', 'ID_Categoria'], 'integer'],
            [['preco'], 'number'],
            [['Nome', 'descricao'], 'string', 'max' => 50],
            [['ID_IVA'], 'exist', 'skipOnError' => true, 'targetClass' => Iva::className(), 'targetAttribute' => ['ID_IVA' => 'ID_IVA']],
            [['ID_Categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['ID_Categoria' => 'ID_Categoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Produto' => 'ID_Produto',
            'ID_IVA' => 'ID_IVA',
            'ID_Categoria' => 'ID_Categoria',
            'Nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preco',
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
    public function getCategoria()
    {
        return $this->hasOne(Categoria::className(), ['ID_Categoria' => 'ID_Categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLotes()
    {
        return $this->hasMany(Lote::className(), ['ID_Produto' => 'ID_Produto']);
    }
}
