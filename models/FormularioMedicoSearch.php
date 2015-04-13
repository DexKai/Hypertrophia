<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FormularioMedico;

/**
 * FormularioMedicoSearch represents the model behind the search form about `app\models\FormularioMedico`.
 */
class FormularioMedicoSearch extends FormularioMedico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FM_id', 'FM_cardiacas', 'FM_alegias', 'FM_osea', 'FM_muscular', 'FM_asfixia', 'FM_embarazada', 'FIM_anemia', 'FM_alergia'], 'integer'],
            [['FM_medicamentos'], 'safe'],
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
        $query = FormularioMedico::find();

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
            'FM_id' => $this->FM_id,
            'FM_cardiacas' => $this->FM_cardiacas,
            'FM_alegias' => $this->FM_alegias,
            'FM_osea' => $this->FM_osea,
            'FM_muscular' => $this->FM_muscular,
            'FM_asfixia' => $this->FM_asfixia,
            'FM_embarazada' => $this->FM_embarazada,
            'FIM_anemia' => $this->FIM_anemia,
            'FM_alergia' => $this->FM_alergia,
        ]);

        $query->andFilterWhere(['like', 'FM_medicamentos', $this->FM_medicamentos]);

        return $dataProvider;
    }
}
