<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\countrylanguage;

/**
 * CountrylanguageSearch represents the model behind the search form of `app\models\countrylanguage`.
 */
class CountrylanguageSearch extends countrylanguage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CountryCode', 'Language', 'IsOfficial'], 'safe'],
            [['Percentage'], 'number'],
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
        $query = countrylanguage::find();

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
            'Percentage' => $this->Percentage,
        ]);

        $query->andFilterWhere(['like', 'CountryCode', $this->CountryCode])
            ->andFilterWhere(['like', 'Language', $this->Language])
            ->andFilterWhere(['like', 'IsOfficial', $this->IsOfficial]);

        return $dataProvider;
    }
}
