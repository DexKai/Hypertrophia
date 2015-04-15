<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property integer $HOR_id
 * @property string $HOR_ENTRADA
 * @property string $HOR_SALIDA
 *
 * @property Profesor[] $profesors
 */
class Horario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'horario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOR_ENTRADA', 'HOR_SALIDA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HOR_id' => 'Hor ID',
            'HOR_ENTRADA' => 'Hor  Entrada',
            'HOR_SALIDA' => 'Hor  Salida',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesors()
    {
        return $this->hasMany(Profesor::className(), ['HOR_id' => 'HOR_id']);
    }
}
