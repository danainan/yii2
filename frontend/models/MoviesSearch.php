<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movies;


/**
 * MoviesSearch represents the model behind the search form of `app\models\Movies`.
 */
class MoviesSearch extends Movies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['_id', 'movies_name', 'movies_img', 'descriptions', 'categories', 'actors', 'years', 'movies_rate'], 'safe'],
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
        $query = Movies::find();

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
        $query
            ->orFilterWhere(['like', 'movies_name', $this->movies_name])
            ->orFilterWhere(['like', 'descriptions', $this->descriptions])
            ->orFilterWhere(['like', 'categories', $this->categories])
            ->orFilterWhere(['like', 'actors', $this->actors])
            ->orFilterWhere(['like', 'years', $this->years])
            ->orFilterWhere(['like', 'movies_rate', $this->movies_rate]);

        return $dataProvider;
    }
}
