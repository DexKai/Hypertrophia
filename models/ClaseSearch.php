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
            [['CLA_id', 'DIS_id'], 'integer'],
            [['CLA_nombre', 'CLA_descripcion', 'CLA_imagen'], 'safe'],
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
            'CLA_id' => $this->CLA_id,
            'DIS_id' => $this->DIS_id,
        ]);

        $query->andFilterWhere(['like', 'CLA_nombre', $this->CLA_nombre])
            ->andFilterWhere(['like', 'CLA_descripcion', $this->CLA_descripcion])
            ->andFilterWhere(['like', 'CLA_imagen', $this->CLA_imagen]);

        return $dataProvider;
    }
}
