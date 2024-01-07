<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Country;

/**
 * CountrySearch represents the model behind the search form of `app\models\Country`.
 */
class CountrySearch extends Country
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Code', 'Name', 'Continent', 'Region', 'LocalName', 'GovernmentForm', 'HeadOfState', 'Code2'], 'safe'],
            [['SurfaceArea', 'LifeExpectancy', 'GNP', 'GNPOld'], 'number'],
            [['IndepYear', 'Population', 'Capital'], 'integer'],
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
        $query = Country::find();

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
            'SurfaceArea' => $this->SurfaceArea,
            'IndepYear' => $this->IndepYear,
            'Population' => $this->Population,
            'LifeExpectancy' => $this->LifeExpectancy,
            'GNP' => $this->GNP,
            'GNPOld' => $this->GNPOld,
            'Capital' => $this->Capital,
        ]);

        $query->andFilterWhere(['like', 'Code', $this->Code])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Continent', $this->Continent])
            ->andFilterWhere(['like', 'Region', $this->Region])
            ->andFilterWhere(['like', 'LocalName', $this->LocalName])
            ->andFilterWhere(['like', 'GovernmentForm', $this->GovernmentForm])
            ->andFilterWhere(['like', 'HeadOfState', $this->HeadOfState])
            ->andFilterWhere(['like', 'Code2', $this->Code2]);

        return $dataProvider;
    }
}
