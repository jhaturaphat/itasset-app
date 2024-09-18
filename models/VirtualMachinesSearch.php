<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VirtualMachines;

/**
 * VirtualMachinesSearch represents the model behind the search form of `app\models\VirtualMachines`.
 */
class VirtualMachinesSearch extends VirtualMachines
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'server_id', 'allocated_cpu'], 'integer'],
            [['vm_name', 'vm_asset_code', 'os', 'allocated_ram', 'allocated_hard_disk_size', 'network_details', 'status'], 'safe'],
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
        $query = VirtualMachines::find();

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
            'allocated_cpu' => $this->allocated_cpu,
        ]);

        $query->andFilterWhere(['like', 'vm_name', $this->vm_name])
            ->andFilterWhere(['like', 'vm_asset_code', $this->vm_asset_code])
            ->andFilterWhere(['like', 'os', $this->os])
            ->andFilterWhere(['like', 'allocated_ram', $this->allocated_ram])
            ->andFilterWhere(['like', 'allocated_hard_disk_size', $this->allocated_hard_disk_size])
            ->andFilterWhere(['like', 'network_details', $this->network_details])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
