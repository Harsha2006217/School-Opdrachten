<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\bestelling;

/**
 * bestellingSearch represents the model behind the search form of `app\models\bestelling`.
 */
class bestellingSearch extends bestelling
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'medewerker_id', 'menu_id'], 'integer'],
            [['naam', 'status', 'timestamp'], 'safe'],
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
        $query = bestelling::find();

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
            'id' => $this->id,
            'medewerker_id' => $this->medewerker_id,
            'menu_id' => $this->menu_id,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'naam', $this->naam])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
