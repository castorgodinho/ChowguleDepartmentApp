<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaperType;

/**
 * searchPapertype represents the model behind the search form of `app\models\PaperType`.
 */
class searchPapertype extends PaperType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['paper_type_id', 'paper_id', 'type_id', 'academic_year_id'], 'integer'],
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
        $query = PaperType::find();

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
            'paper_type_id' => $this->paper_type_id,
            'paper_id' => $this->paper_id,
            'type_id' => $this->type_id,
            'academic_year_id' => $this->academic_year_id,
        ]);

        return $dataProvider;
    }
}
