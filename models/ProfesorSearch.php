<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profesor;

/**
 * ProfesorSearch represents the model behind the search form about `app\models\Profesor`.
 */
class ProfesorSearch extends Profesor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRO_id', 'HOR_id', 'SUE_id', 'TIP_id'], 'integer'],
            [['PRO_nombre', 'PRO_apellido', 'PRO_rut', 'PRO_email'], 'safe'],
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
        $query = Profesor::find();

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
            'PRO_id' => $this->PRO_id,
            'HOR_id' => $this->HOR_id,
            'SUE_id' => $this->SUE_id,
            'TIP_id' => $this->TIP_id,
        ]);

        $query->andFilterWhere(['like', 'PRO_nombre', $this->PRO_nombre])
            ->andFilterWhere(['like', 'PRO_apellido', $this->PRO_apellido])
            ->andFilterWhere(['like', 'PRO_rut', $this->PRO_rut])
            ->andFilterWhere(['like', 'PRO_email', $this->PRO_email]);

        return $dataProvider;
    }
}
