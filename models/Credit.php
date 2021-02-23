<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "credit".
 *
 * @property int $id_credit
 * @property float|null $total_credit
 * @property string|null $date
 * @property string|null $status_credit
 * @property string|null $end_time
 * @property int $paket_id_paket
 * @property string|null $user
 *
 * @property Paket $paketIdPaket
 * @property Debit[] $debits
 * @property Transaksi[] $transaksis
 */
class Credit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'credit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_credit'], 'number'],
            [['date', 'end_time'], 'safe'],
            [['paket_id_paket'], 'required'],
            [['paket_id_paket'], 'integer'],
            [['status_credit'], 'string', 'max' => 45],
            [['user'], 'string', 'max' => 100],
            [['paket_id_paket'], 'exist', 'skipOnError' => true, 'targetClass' => Paket::className(), 'targetAttribute' => ['paket_id_paket' => 'id_paket']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_credit' => 'Id Credit',
            'total_credit' => 'Total Credit',
            'date' => 'Date',
            'status_credit' => 'Status Credit',
            'end_time' => 'End Time',
            'paket_id_paket' => 'Paket Id Paket',
            'user' => 'User',
        ];
    }

    /**
     * Gets query for [[PaketIdPaket]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaketIdPaket()
    {
        return $this->hasOne(Paket::className(), ['id_paket' => 'paket_id_paket']);
    }

    /**
     * Gets query for [[Debits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDebits()
    {
        return $this->hasMany(Debit::className(), ['credit_id_credit' => 'id_credit']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['credit_id_credit' => 'id_credit']);
    }
}
