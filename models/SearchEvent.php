<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Event;

/**
 * SearchEvent represents the model behind the search form of `app\models\Event`.
 */
class SearchEvent extends Event
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'department_id', 'academic_year_id'], 'integer'],
            [['name', 'venue', 'inhouse', 'participant', 'start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
            [['cost'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Event::find();

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
        $query->andFilterWhere([
            'event_id' => $this->event_id,
            'cost' => $this->cost,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'department_id' => $this->department_id,
            'academic_year_id' => $this->academic_year_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'venue', $this->venue])
            ->andFilterWhere(['like', 'inhouse', $this->inhouse])
            ->andFilterWhere(['like', 'participant', $this->participant]);

        return $dataProvider;
    }
}
