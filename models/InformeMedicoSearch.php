<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InformeMedico;

/**
 * InformeMedicoSearch represents the model behind the search form about `app\models\InformeMedico`.
 */
class InformeMedicoSearch extends InformeMedico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IM_id', 'SO_id', 'PRO_id'], 'integer'],
            [['IM_cardiacas', 'IM_cardicas_detalle', 'IM_alergias', 'IM_alergia_detalle', 'IM_osea', 'IM_osea_detalle', 'IM_muscular', 'IM_muscualr_detalle', 'IM_asfixia', 'IM_embarazada', 'IM_anemia', 'IM_medicamentos'], 'safe'],
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
        $query = InformeMedico::find();

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
            'IM_id' => $this->IM_id,
            'SO_id' => $this->SO_id,
            'PRO_id' => $this->PRO_id,
        ]);

        $query->andFilterWhere(['like', 'IM_cardiacas', $this->IM_cardiacas])
            ->andFilterWhere(['like', 'IM_cardicas_detalle', $this->IM_cardicas_detalle])
            ->andFilterWhere(['like', 'IM_alergias', $this->IM_alergias])
            ->andFilterWhere(['like', 'IM_alergia_detalle', $this->IM_alergia_detalle])
            ->andFilterWhere(['like', 'IM_osea', $this->IM_osea])
            ->andFilterWhere(['like', 'IM_osea_detalle', $this->IM_osea_detalle])
            ->andFilterWhere(['like', 'IM_muscular', $this->IM_muscular])
            ->andFilterWhere(['like', 'IM_muscualr_detalle', $this->IM_muscualr_detalle])
            ->andFilterWhere(['like', 'IM_asfixia', $this->IM_asfixia])
            ->andFilterWhere(['like', 'IM_embarazada', $this->IM_embarazada])
            ->andFilterWhere(['like', 'IM_anemia', $this->IM_anemia])
            ->andFilterWhere(['like', 'IM_medicamentos', $this->IM_medicamentos]);

        return $dataProvider;
    }
}
