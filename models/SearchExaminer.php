<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Examiner;

/**
 * SearchExaminer represents the model behind the search form of `app\models\Examiner`.
 */
class SearchExaminer extends Examiner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['examiner_id', 'department_id', 'academic_year_id'], 'integer'],
            [['name', 'faculty_name', 'venue', 'start_date', 'end_date', 'created_at', 'updated_at'], 'safe'],
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
        $query = Examiner::find();

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
            'examiner_id' => $this->examiner_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'department_id' => $this->department_id,
            'academic_year_id' => $this->academic_year_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'faculty_name', $this->faculty_name])
            ->andFilterWhere(['like', 'venue', $this->venue]);

        return $dataProvider;
    }
}
