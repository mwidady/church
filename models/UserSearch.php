<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form of `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_baptized', 'confirmation', 'is_join_table', 'center_id', 'status', 'created_by'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'designation', 'denomination', 'dob', 'dob_region', 'dob_district', 'marital_status', 'marriage_type', 'spouse_name', 'street_join', 'church_elder', 'occupation', 'occupation_place', 'designation_designation', 'phone', 'email', 'next_of_kin_phone', 'home_congregation', 'password', 'authKey', 'password_reset_token', 'user_image', 'updated_at', 'created_at'], 'safe'],
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
        $query = User::find();

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
            'is_baptized' => $this->is_baptized,
            'confirmation' => $this->confirmation,
            'is_join_table' => $this->is_join_table,
            'center_id' => $this->center_id,
            'status' => $this->status,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'designation', $this->designation])
            ->andFilterWhere(['like', 'denomination', $this->denomination])
            ->andFilterWhere(['like', 'dob_region', $this->dob_region])
            ->andFilterWhere(['like', 'dob_district', $this->dob_district])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'marriage_type', $this->marriage_type])
            ->andFilterWhere(['like', 'spouse_name', $this->spouse_name])
            ->andFilterWhere(['like', 'street_join', $this->street_join])
            ->andFilterWhere(['like', 'church_elder', $this->church_elder])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'occupation_place', $this->occupation_place])
            ->andFilterWhere(['like', 'designation_designation', $this->designation_designation])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'next_of_kin_phone', $this->next_of_kin_phone])
            ->andFilterWhere(['like', 'home_congregation', $this->home_congregation])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'user_image', $this->user_image]);

        return $dataProvider;
    }
}
