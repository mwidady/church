<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "centers".
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property int $district_id
 * @property string|null $email
 *
 * @property District $district
 * @property User[] $users
 */
class Center extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'centers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'email'], 'default', 'value' => null],
            [['name', 'district_id'], 'required'],
            [['district_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 500],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::class, 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Jina la Sharika',
            'address' => 'Sanduku la Posta',
            'district_id' => 'Jina la Wilaya',
            'email' => 'Barua Pepe',
        ];
    }

    /**
     * Gets query for [[District]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::class, ['id' => 'district_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['center_id' => 'id']);
    }

}
