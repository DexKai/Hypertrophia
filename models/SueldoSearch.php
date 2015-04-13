<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sueldo;

/**
 * SueldoSearch represents the model behind the search form about `app\models\Sueldo`.
 */
class SueldoSearch extends Sueldo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SUE_id', 'SUE_sueldo'], 'integer'],
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
        $query = Sueldo::find();

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
            'SUE_id' => $this->SUE_id,
            'SUE_sueldo' => $this->SUE_sueldo,
        ]);

        return $dataProvider;
    }
}
