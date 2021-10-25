<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lote;

/**
 * LoteSearch represents the model behind the search form of `app\models\Lote`.
 */
class LoteSearch extends Lote
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Lote', 'ID_Produto', 'Quantidade'], 'integer'],
            [['Data_Validade', 'descricao'], 'safe'],
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
        $query = Lote::find();

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
            'ID_Lote' => $this->ID_Lote,
            'ID_Produto' => $this->ID_Produto,
            'Data_Validade' => $this->Data_Validade,
            'Quantidade' => $this->Quantidade,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
