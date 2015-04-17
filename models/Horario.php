<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horario".
 *
 * @property integer $HOR_id
 * @property integer $PRO_id
 * @property string $HOR_entrada
 * @property string $HOR_salida
 *
 * @property Profesor $pRO
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
            [['PRO_id'], 'integer'],
            [['HOR_entrada', 'HOR_salida'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HOR_id' => 'Hor ID',
            'PRO_id' => 'Nombre Profesor',
            'HOR_entrada' => 'Ingrese la hora de entrada del profesor',
            'HOR_salida' => 'Ingrese la hora de salida del profesor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPRO()
    {
        return $this->hasOne(Profesor::className(), ['PRO_id' => 'PRO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesors()
    {
        return $this->hasMany(Profesor::className(), ['HOR_id' => 'HOR_id']);
    }
}
