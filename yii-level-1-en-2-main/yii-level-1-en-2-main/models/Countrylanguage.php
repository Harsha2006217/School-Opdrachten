<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "countrylanguage".
 *
 * @property string $CountryCode
 * @property string $Language
 * @property string $IsOfficial
 * @property float $Percentage
 *
 * @property Country $countryCode
 */
class Countrylanguage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countrylanguage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CountryCode', 'Language'], 'required'],
            [['IsOfficial'], 'string'],
            [['Percentage'], 'number'],
            [['CountryCode'], 'string', 'max' => 3],
            [['Language'], 'string', 'max' => 30],
            [['CountryCode', 'Language'], 'unique', 'targetAttribute' => ['CountryCode', 'Language']],
            [['CountryCode'], 'exist', 'skipOnError' => true, 'targetClass' => Country::class, 'targetAttribute' => ['CountryCode' => 'Code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CountryCode' => 'Country Code',
            'Language' => 'Language',
            'IsOfficial' => 'Is Official',
            'Percentage' => 'Percentage',
        ];
    }

    /**
     * Gets query for [[CountryCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountryCode()
    {
        return $this->hasOne(Country::class, ['Code' => 'CountryCode']);
    }
}
