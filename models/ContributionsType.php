<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contributions_types".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 *
 * @property Contribution[] $contributions
 */
class ContributionsType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contributions_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'default', 'value' => null],
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Aina ya Michango',
            'name' => 'Aina ya Michango',
            'description' => 'Maelezo ya Aina ya Michango',
        ];
    }

    /**
     * Gets query for [[Contributions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContributions()
    {
        return $this->hasMany(Contribution::class, ['contribution_type_id' => 'id']);
    }

}
