<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefUrusan;

/**
 * RefUrusanSearch represents the model behind the search form about `common\models\RefUrusan`.
 */
class RefUrusanSearch extends RefUrusan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun'], 'integer'],
            [['kd_urusan', 'nm_urusan', 'create_at', 'update_at'], 'safe'],
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
        $query = RefUrusan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'tahun' => $this->tahun,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'kd_urusan', $this->kd_urusan])
            ->andFilterWhere(['like', 'nm_urusan', $this->nm_urusan]);

        return $dataProvider;
    }
}
