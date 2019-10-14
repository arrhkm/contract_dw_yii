<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Person;

/**
 * PersonSearch represents the model behind the search form of `app\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['idcard', 'name', 'birth_of_date', 'birth_city', 'phone', 'address', 'bank_account', 'gender', 'tax_account', 'city'], 'safe'],
            [['marital'], 'boolean'],
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
        $query = Person::find();

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
            'birth_of_date' => $this->birth_of_date,
            'marital' => $this->marital,
        ]);

        $query->andFilterWhere(['ilike', 'idcard', $this->idcard])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'birth_city', $this->birth_city])
            ->andFilterWhere(['ilike', 'phone', $this->phone])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'bank_account', $this->bank_account])
            ->andFilterWhere(['ilike', 'gender', $this->gender])
            ->andFilterWhere(['ilike', 'tax_account', $this->tax_account])
            ->andFilterWhere(['ilike', 'city', $this->city]);

        return $dataProvider;
    }
}
