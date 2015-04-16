<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Progreso;

/**
 * ProgresoSearch represents the model behind the search form about `app\models\Progreso`.
 */
class ProgresoSearch extends Progreso
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROG_id', 'SO_id'], 'integer'],
            [['PROG_peso', 'PROG_altura', 'PROG_porcentaje_grasa', 'PROG_indice_masa_corporal'], 'number'],
            [['PROG_fecha_evaluacion'], 'safe'],
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
        $query = Progreso::find();

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
            'PROG_id' => $this->PROG_id,
            'SO_id' => $this->SO_id,
            'PROG_peso' => $this->PROG_peso,
            'PROG_altura' => $this->PROG_altura,
            'PROG_porcentaje_grasa' => $this->PROG_porcentaje_grasa,
            'PROG_indice_masa_corporal' => $this->PROG_indice_masa_corporal,
            'PROG_fecha_evaluacion' => $this->PROG_fecha_evaluacion,
        ]);

        return $dataProvider;
    }
}
