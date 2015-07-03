<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Socio;

/**
 * SocioSearch represents the model behind the search form about `app\models\Socio`.
 */
class SocioSearch extends Socio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SO_id', 'PROG_id', 'IM_id', 'PA_id', 'user_id'], 'integer'],
            [['SO_rut', 'SO_nombre', 'SO_apellido_materno', 'SO_apellido_paterno', 'SO_direccion'], 'safe'],
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
        $query = Socio::find();

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
            'SO_id' => $this->SO_id,
            'PROG_id' => $this->PROG_id,
            'IM_id' => $this->IM_id,
            'PA_id' => $this->PA_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'SO_rut', $this->SO_rut])
            ->andFilterWhere(['like', 'SO_nombre', $this->SO_nombre])
            ->andFilterWhere(['like', 'SO_apellido_materno', $this->SO_apellido_materno])
            ->andFilterWhere(['like', 'SO_apellido_paterno', $this->SO_apellido_paterno])
            ->andFilterWhere(['like', 'SO_direccion', $this->SO_direccion]);

        return $dataProvider;
    }
}
