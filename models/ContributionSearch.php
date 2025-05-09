<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contribution;

/**
 * ContributionSearch represents the model behind the search form of `app\models\Contribution`.
 */
class ContributionSearch extends Contribution
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'contribution_type_id'], 'integer'],
            [['amount'], 'number'],
            [['date_of_payment', 'payment_mode', 'reference_no', 'payment_desc', 'channel_name'], 'safe'],
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
        $query = Contribution::find()->orderBy('id DESC');

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
            'user_id' => $this->user_id,
            'contribution_type_id' => $this->contribution_type_id,
            'amount' => $this->amount,
            'date_of_payment' => $this->date_of_payment,
        ]);

        $query->andFilterWhere(['like', 'payment_mode', $this->payment_mode])
            ->andFilterWhere(['like', 'reference_no', $this->reference_no])
            ->andFilterWhere(['like', 'payment_desc', $this->payment_desc])
            ->andFilterWhere(['like', 'channel_name', $this->channel_name]);

        return $dataProvider;
    }

    public function searchRecent()
    {
        $query = Contribution::find()->orderBy('id', 'DESC')->limit(5);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        return $dataProvider;
    }


}
