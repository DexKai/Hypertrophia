<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Horario;

/**
 * HorarioSearch represents the model behind the search form about `app\models\Horario`.
 */
class HorarioSearch extends Horario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOR_id', 'PRO_id'], 'integer'],
            [['HOR_entrada', 'HOR_salida'], 'safe'],
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
        $query = Horario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'HOR_id' => $this->HOR_id,
            'PRO_id' => $this->PRO_id,
            'HOR_entrada' => $this->HOR_entrada,
            'HOR_salida' => $this->HOR_salida,
        ]);

        return $dataProvider;
    }
}
