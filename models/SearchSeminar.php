<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Seminar;

/**
 * SearchSeminar represents the model behind the search form of `app\models\Seminar`.
 */
class SearchSeminar extends Seminar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seminar_id'], 'integer'],
            [['speaker_name', 'start_date', 'end_date', 'participant', 'venue', 'inhouse', 'created_at', 'updated_at', 'department_id', 'academic_year_id'], 'safe'],
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
        $query = Seminar::find();

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

        $query->joinWith('academicYear');
        $query->joinWith('department');

        // grid filtering conditions
        $query->andFilterWhere([
            'seminar_id' => $this->seminar_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'speaker_name', $this->speaker_name])
            ->andFilterWhere(['like', 'participant', $this->participant])
            ->andFilterWhere(['like', 'venue', $this->venue])
            ->andFilterWhere(['like', 'inhouse', $this->inhouse]);
        $query->andFilterWhere(['like', 'department.name', $this->department_id]);
        $query->andFilterWhere(['like', 'academic_year.year', $this->academic_year_id]);

        return $dataProvider;
    }
}
