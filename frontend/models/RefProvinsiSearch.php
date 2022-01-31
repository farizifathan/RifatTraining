<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefProvinsi;

/**
 * RefProvinsiSearch represents the model behind the search form of `common\models\RefProvinsi`.
 */
class RefProvinsiSearch extends RefProvinsi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_prov'], 'integer'],
            [['nama_prov', 'create_at', 'update_at'], 'safe'],
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
        $query = RefProvinsi::find()->orderBy(['nama_prov' => SORT_ASC]);

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
            'kd_prov' => $this->kd_prov,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'nama_prov', $this->nama_prov]);

        return $dataProvider;
    }
}
