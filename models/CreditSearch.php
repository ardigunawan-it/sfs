<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Credit;

/**
 * CreditSearch represents the model behind the search form of `app\models\Credit`.
 */
class CreditSearch extends Credit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_credit', 'paket_id_paket'], 'integer'],
            [['total_credit'], 'number'],
            [['date', 'status_credit', 'end_time', 'user'], 'safe'],
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
        $query = Credit::find();

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
            'id_credit' => $this->id_credit,
            'total_credit' => $this->total_credit,
            'date' => $this->date,
            'end_time' => $this->end_time,
            'paket_id_paket' => $this->paket_id_paket,
        ]);

        $query->andFilterWhere(['like', 'status_credit', $this->status_credit])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
