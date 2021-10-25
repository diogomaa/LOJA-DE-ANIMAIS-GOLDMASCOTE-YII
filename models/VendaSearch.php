<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Venda;

/**
 * VendaSearch represents the model behind the search form of `app\models\Venda`.
 */
class VendaSearch extends Venda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Venda', 'ID_Cliente'], 'integer'],
            [['Data_Venda'], 'safe'],
            [['Total_Com_IVA', 'Total_Sem_IVA'], 'number'],
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
        $query = Venda::find();

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
            'ID_Venda' => $this->ID_Venda,
            'ID_Cliente' => $this->ID_Cliente,
            'Data_Venda' => $this->Data_Venda,
            'Total_Com_IVA' => $this->Total_Com_IVA,
            'Total_Sem_IVA' => $this->Total_Sem_IVA,
        ]);

        return $dataProvider;
    }
}
