<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asset;

/**
 * AssetSearch represents the model behind the search form of `app\models\Asset`.
 */
class AssetSearch extends Asset
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['server_id'], 'integer'],
            [['asset_code', 'asset_name', 'brand_model', 'serial_number', 'installation_location', 'purchase_date', 'entry_date', 'supplier', 'order_number', 'warranty_period', 'status', 'comments', 'os', 'cpu', 'ram', 'hard_disk_size', 'storage_type', 'network', 'other_ports'], 'safe'],
            [['asset_value'], 'number'],
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
        $query = Asset::find();

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
            'server_id' => $this->server_id,
            'purchase_date' => $this->purchase_date,
            'entry_date' => $this->entry_date,
            'asset_value' => $this->asset_value,
        ]);

        $query->andFilterWhere(['like', 'asset_code', $this->asset_code])
            ->andFilterWhere(['like', 'asset_name', $this->asset_name])
            ->andFilterWhere(['like', 'brand_model', $this->brand_model])
            ->andFilterWhere(['like', 'serial_number', $this->serial_number])
            ->andFilterWhere(['like', 'installation_location', $this->installation_location])
            ->andFilterWhere(['like', 'supplier', $this->supplier])
            ->andFilterWhere(['like', 'order_number', $this->order_number])
            ->andFilterWhere(['like', 'warranty_period', $this->warranty_period])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'os', $this->os])
            ->andFilterWhere(['like', 'cpu', $this->cpu])
            ->andFilterWhere(['like', 'ram', $this->ram])
            ->andFilterWhere(['like', 'hard_disk_size', $this->hard_disk_size])
            ->andFilterWhere(['like', 'storage_type', $this->storage_type])
            ->andFilterWhere(['like', 'network', $this->network])
            ->andFilterWhere(['like', 'other_ports', $this->other_ports]);

        return $dataProvider;
    }
}
