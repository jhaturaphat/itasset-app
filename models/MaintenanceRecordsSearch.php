<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MaintenanceRecords;

/**
 * MaintenanceRecordsSearch represents the model behind the search form of `app\models\MaintenanceRecords`.
 */
class MaintenanceRecordsSearch extends MaintenanceRecords
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'server_id'], 'integer'],
            [['maintenance_start_date', 'maintenance_end_date', 'maintenance_details', 'post_maintenance_status', 'last_usage_log', 'responsible_person', 'additional_notes'], 'safe'],
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
        $query = MaintenanceRecords::find();

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
            'id' => $this->id,
            'server_id' => $this->server_id,
            'maintenance_start_date' => $this->maintenance_start_date,
            'maintenance_end_date' => $this->maintenance_end_date,
        ]);

        $query->andFilterWhere(['like', 'maintenance_details', $this->maintenance_details])
            ->andFilterWhere(['like', 'post_maintenance_status', $this->post_maintenance_status])
            ->andFilterWhere(['like', 'last_usage_log', $this->last_usage_log])
            ->andFilterWhere(['like', 'responsible_person', $this->responsible_person])
            ->andFilterWhere(['like', 'additional_notes', $this->additional_notes]);

        return $dataProvider;
    }
}
