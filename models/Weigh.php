<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weigh".
 *
 * @property int $id_weigh
 * @property float|null $qty_weigh
 * @property string|null $uom
 *
 * @property Debit[] $debits
 * @property Transaksi[] $transaksis
 */
class Weigh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weigh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qty_weigh'], 'number'],
            [['uom'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_weigh' => 'Id Weigh',
            'qty_weigh' => 'Qty Weigh',
            'uom' => 'Uom',
        ];
    }

    /**
     * Gets query for [[Debits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDebits()
    {
        return $this->hasMany(Debit::className(), ['weigh_id_weigh' => 'id_weigh']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['weigh_id_weigh' => 'id_weigh']);
    }
}
