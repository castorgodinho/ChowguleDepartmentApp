<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentOrganization;

/**
 * SearchStudentOrganization represents the model behind the search form of `app\models\StudentOrganization`.
 */
class SearchStudentOrganization extends StudentOrganization
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_organization_id', 'organization_id', 'student_id'], 'integer'],
            [['date_of_joining', 'position', 'created_at', 'updated_at'], 'safe'],
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
        $query = StudentOrganization::find();

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
            'student_organization_id' => $this->student_organization_id,
            'organization_id' => $this->organization_id,
            'student_id' => $this->student_id,
            'date_of_joining' => $this->date_of_joining,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'position', $this->position]);

        return $dataProvider;
    }
}
