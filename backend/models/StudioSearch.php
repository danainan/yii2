<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Studio;

/**
 * StudioSearch represents the model behind the search form of `app\models\Studio`.
 */
class StudioSearch extends Studio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'studio_name', 'studio_img', 'details'], 'safe'],
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
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Studio::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'studio_name', $this->studio_name])
            ->andFilterWhere(['like', 'studio_img', $this->studio_img])
            ->andFilterWhere(['like', 'details', $this->details]);

        return $dataProvider;
    }
}
