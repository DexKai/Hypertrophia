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
            [['IM_id', 'SO_id', 'PRO_id', 'IM_cardiacas', 'IM_alergias', 'IM_osea', 'IM_muscular', 'IM_asfixia', 'IM_embarazada', 'IM_anemia', 'IM_alergia'], 'integer'],
            [['IM_medicamentos'], 'safe'],
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
            'IM_cardiacas' => $this->IM_cardiacas,
            'IM_alergias' => $this->IM_alergias,
            'IM_osea' => $this->IM_osea,
            'IM_muscular' => $this->IM_muscular,
            'IM_asfixia' => $this->IM_asfixia,
            'IM_embarazada' => $this->IM_embarazada,
            'IM_anemia' => $this->IM_anemia,
            'IM_alergia' => $this->IM_alergia,
        ]);

        $query->andFilterWhere(['like', 'IM_medicamentos', $this->IM_medicamentos]);

        return $dataProvider;
    }
}
