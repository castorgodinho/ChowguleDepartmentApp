<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Revision;

/**
 * searchRevision represents the model behind the search form of `app\models\Revision`.
 */
class searchRevision extends Revision
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['revision_id', 'paper_id', 'academic_year_id'], 'integer'],
            [['syllabus_file', 'syllabus_date', 'created_at', 'updated_at', 'status'], 'safe'],
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
        $query = Revision::find();

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
            'revision_id' => $this->revision_id,
            'syllabus_date' => $this->syllabus_date,
            'paper_id' => $this->paper_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'academic_year_id' => $this->academic_year_id,
            'status'=>1,
        ]);

        $query->andFilterWhere(['like', 'syllabus_file', $this->syllabus_file])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
