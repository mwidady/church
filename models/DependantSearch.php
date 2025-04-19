<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dependant;

/**
 * DependantSearch represents the model behind the search form of `app\models\Dependant`.
 */
class DependantSearch extends Dependant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'is_budtized'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'dob', 'dependant_type', 'occupation'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Dependant::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'dob' => $this->dob,
            'user_id' => $this->user_id,
            'is_budtized' => $this->is_budtized,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'dependant_type', $this->dependant_type])
            ->andFilterWhere(['like', 'occupation', $this->occupation]);

        return $dataProvider;
    }
}
