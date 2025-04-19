<?php

namespace app\models;

use yii\base\Model;

class Report extends Model
{
    public $start_date;
    public $end_date;

    public function rules()
    {
        return [
            [['start_date', 'end_date'], 'required'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'start_date' => 'Tarehe ya Kuanza',
            'end_date' => 'Tarehe ya Mwisho'
        ];
    }
}
