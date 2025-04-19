<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property int $id
 * @property string $name
 *
 * @property District[] $districts
 */
class Region extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mkoa',
            'name' => 'Jina',
        ];
    }

    /**
     * Gets query for [[Districts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(District::class, ['region_id' => 'id']);
    }

}
