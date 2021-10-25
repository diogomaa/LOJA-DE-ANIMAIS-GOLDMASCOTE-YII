<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Linhapedido;

/**
 * LinhapedidoSearch represents the model behind the search form of `app\models\Linhapedido`.
 */
class LinhapedidoSearch extends Linhapedido
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Linha', 'ID_Venda', 'ID_Stock', 'Quantidade', 'ID_IVA'], 'integer'],
            [['Total_Sem_IVA', 'Total_Com_IVA'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Linhapedido::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID_Linha' => $this->ID_Linha,
            'ID_Venda' => $this->ID_Venda,
            'ID_Stock' => $this->ID_Stock,
            'Quantidade' => $this->Quantidade,
            'Total_Sem_IVA' => $this->Total_Sem_IVA,
            'Total_Com_IVA' => $this->Total_Com_IVA,
            'ID_IVA' => $this->ID_IVA,
        ]);

        return $dataProvider;
    }
}
