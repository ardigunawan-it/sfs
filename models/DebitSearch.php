<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Debit;

/**
 * DebitSearch represents the model behind the search form of `app\models\Debit`.
 */
class DebitSearch extends Debit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_debit', 'credit_id_credit', 'fish_id_fish', 'weigh_id_weigh'], 'integer'],
            [['total_debit', 'saldo'], 'number'],
            [['date', 'user'], 'safe'],
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
        $query = Debit::find();

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
            'id_debit' => $this->id_debit,
            'total_debit' => $this->total_debit,
            'date' => $this->date,
            'saldo' => $this->saldo,
            'credit_id_credit' => $this->credit_id_credit,
            'fish_id_fish' => $this->fish_id_fish,
            'weigh_id_weigh' => $this->weigh_id_weigh,
        ]);

        $query->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
