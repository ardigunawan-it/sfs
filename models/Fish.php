<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fish".
 *
 * @property int $id_fish
 * @property string|null $name
 * @property float|null $price
 *
 * @property Debit[] $debits
 * @property Transaksi[] $transaksis
 */
class Fish extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fish';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fish' => 'Id Fish',
            'name' => 'Name',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Debits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDebits()
    {
        return $this->hasMany(Debit::className(), ['fish_id_fish' => 'id_fish']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['fish_id_fish' => 'id_fish']);
    }
}
