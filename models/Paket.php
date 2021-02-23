<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paket".
 *
 * @property int $id_paket
 * @property string|null $type_paket
 * @property float|null $total
 *
 * @property Credit[] $credits
 */
class Paket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total'], 'number'],
            [['type_paket'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_paket' => 'Id Paket',
            'type_paket' => 'Type Paket',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[Credits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCredits()
    {
        return $this->hasMany(Credit::className(), ['paket_id_paket' => 'id_paket']);
    }
}
