<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProgramStudent;

/**
 * SearchProgramStudent represents the model behind the search form of `app\models\ProgramStudent`.
 */
class SearchProgramStudent extends ProgramStudent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['program_student_id'], 'integer'],
            [['created_at', 'updated_at', 'status', 'program_id','student_id', 'academic_year_id'], 'safe'],
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
        $query = ProgramStudent::find();

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
        
        $query->joinWith('program');
        $query->joinWith('student');
        $query->joinWith('academicYear');
        // grid filtering conditions
        $query->andFilterWhere([
            'program_student_id' => $this->program_student_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            
        ]);

        $query->andFilterWhere(['like', 'program.name', $this->program_id]);
        $query->andFilterWhere(['like', 'student.name', $this->student_id]);
        $query->andFilterWhere(['like', 'academic_year.year', $this->academic_year_id]);
        return $dataProvider;
    }
}
