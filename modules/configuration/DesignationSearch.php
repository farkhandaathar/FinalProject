<?php

namespace app\modules\configuration;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\configuration\models\Designation;

/**
 * DesignationSearch represents the model behind the search form of `app\modules\configuration\models\Designation`.
 */
class DesignationSearch extends Designation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designation_id', 'created_by', 'is_status'], 'integer'],
            [['designation_name'], 'safe'],
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
        $query = Designation::find();

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
            'designation_id' => $this->designation_id,
            'created_by' => $this->created_by,
            'is_status' => $this->is_status,
        ]);

        $query->andFilterWhere(['like', 'designation_name', $this->designation_name]);

        return $dataProvider;
    }
}
