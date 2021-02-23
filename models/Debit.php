<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "debit".
 *
 * @property int $id_debit
 * @property float|null $total_debit
 * @property string|null $date
 * @property float|null $saldo
 * @property int $credit_id_credit
 * @property int $fish_id_fish
 * @property int $weigh_id_weigh
 * @property string|null $user
 *
 * @property Credit $creditIdCredit
 * @property Fish $fishIdFish
 * @property Weigh $weighIdWeigh
 */
class Debit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'debit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_debit', 'saldo'], 'number'],
            [['date'], 'safe'],
            [['credit_id_credit', 'fish_id_fish', 'weigh_id_weigh'], 'required'],
            [['credit_id_credit', 'fish_id_fish', 'weigh_id_weigh'], 'integer'],
            [['user'], 'string', 'max' => 100],
            [['credit_id_credit'], 'exist', 'skipOnError' => true, 'targetClass' => Credit::className(), 'targetAttribute' => ['credit_id_credit' => 'id_credit']],
            [['fish_id_fish'], 'exist', 'skipOnError' => true, 'targetClass' => Fish::className(), 'targetAttribute' => ['fish_id_fish' => 'id_fish']],
            [['weigh_id_weigh'], 'exist', 'skipOnError' => true, 'targetClass' => Weigh::className(), 'targetAttribute' => ['weigh_id_weigh' => 'id_weigh']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_debit' => 'Id Debit',
            'total_debit' => 'Total Debit',
            'date' => 'Date',
            'saldo' => 'Saldo',
            'credit_id_credit' => 'Credit Id Credit',
            'fish_id_fish' => 'Fish Id Fish',
            'weigh_id_weigh' => 'Weigh Id Weigh',
            'user' => 'User',
        ];
    }

    /**
     * Gets query for [[CreditIdCredit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreditIdCredit()
    {
        return $this->hasOne(Credit::className(), ['id_credit' => 'credit_id_credit']);
    }

    /**
     * Gets query for [[FishIdFish]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFishIdFish()
    {
        return $this->hasOne(Fish::className(), ['id_fish' => 'fish_id_fish']);
    }

    /**
     * Gets query for [[WeighIdWeigh]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWeighIdWeigh()
    {
        return $this->hasOne(Weigh::className(), ['id_weigh' => 'weigh_id_weigh']);
    }
}
