<?php

namespace app\modules\Courses\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Courses\models\Section;

/**
 * SectionSearch represents the model behind the search form of `app\modules\courses\models\Section`.
 */
class SectionSearch extends Section
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_id', 'section_course_id', 'intake', 'created_by', 'is_status'], 'integer'],
            [['section_name', 'created_at'], 'safe'],
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
        $query = Section::find();

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
            'section_id' => $this->section_id,
            'section_course_id' => $this->section_course_id,
            'intake' => $this->intake,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'section_name', $this->section_name]);

        return $dataProvider;
    }
}
