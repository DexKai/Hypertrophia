<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clase;

/**
 * ClaseSearch represents the model behind the search form about `app\models\Clase`.
 */
class ClaseSearch extends Clase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_clase'], 'integer'],
            [['nombre_clase', 'descripcion_clase'], 'safe'],
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
        $query = Clase::find();

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
            'id_clase' => $this->id_clase,
        ]);

        $query->andFilterWhere(['like', 'nombre_clase', $this->nombre_clase])
            ->andFilterWhere(['like', 'descripcion_clase', $this->descripcion_clase]);

        return $dataProvider;
    }
}
