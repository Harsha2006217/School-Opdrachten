<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $Code
 * @property string $Name
 * @property string $Continent
 * @property string $Region
 * @property float $SurfaceArea
 * @property int|null $IndepYear
 * @property int $Population
 * @property float|null $LifeExpectancy
 * @property float|null $GNP
 * @property float|null $GNPOld
 * @property string $LocalName
 * @property string $GovernmentForm
 * @property string|null $HeadOfState
 * @property int|null $Capital
 * @property string $Code2
 *
 * @property City[] $cities
 * @property Countrylanguage[] $countrylanguages
 */



class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Code'], 'required'],
            [['Continent'], 'string'],
            [['SurfaceArea', 'LifeExpectancy', 'GNP', 'GNPOld'], 'number'],
            [['IndepYear', 'Population', 'Capital'], 'integer'],
            [['Code'], 'string', 'max' => 3],
            [['Name'], 'string', 'max' => 52],
            [['Region'], 'string', 'max' => 26],
            [['LocalName', 'GovernmentForm'], 'string', 'max' => 45],
            [['HeadOfState'], 'string', 'max' => 60],
            [['Code2'], 'string', 'max' => 2],
            [['Code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Code' => 'Code',
            'Name' => 'Name',
            'Continent' => 'Continent',
            'Region' => 'Region',
            'SurfaceArea' => 'Surface Area',
            'IndepYear' => 'Indep Year',
            'Population' => 'Population',
            'LifeExpectancy' => 'Life Expectancy',
            'GNP' => 'Gnp',
            'GNPOld' => 'Gnp Old',
            'LocalName' => 'Local Name',
            'GovernmentForm' => 'Government Form',
            'HeadOfState' => 'Head Of State',
            'Capital' => 'Capital',
            'Code2' => 'Code2',
        ];
    }

    /**
     * Gets query for [[Cities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::class, ['CountryCode' => 'Code']);
    }

    /**
     * Gets query for [[Countrylanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    
     public function getCountrylanguages()
    {
        return $this->hasMany(Countrylanguage::class, ['CountryCode' => 'Code']);
    }

    public function getHoofdstad()
    {
        return $this->hasOne(City::className(), ['ID' => 'Capital']);
    }
}



