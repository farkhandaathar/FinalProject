<?php

namespace app\modules\Courses\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\Courses\models\Subjects;

/**
 * SubjectsSearch represents the model behind the search form of `app\modules\Courses\models\Subjects`.
 */
class SubjectsSearch extends Subjects
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'is_status'], 'integer'],
            [['subject_code', 'subject_name', 'created_at', 'updated_at'], 'safe'],
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
        $query = Subjects::find();

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
            'subject_id' => $this->subject_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'subject_code', $this->subject_code])
            ->andFilterWhere(['like', 'subject_name', $this->subject_name]);

        return $dataProvider;
    }
}
