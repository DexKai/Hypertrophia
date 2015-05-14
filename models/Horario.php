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
            [['HOR_entrada', 'HOR_salida'], 'safe'],
            [['HOR_entrada', 'HOR_salida', 'PRO_id'], 'required','message'=>'campo requerido']




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
            'HOR_entrada' => 'Horario entrada',
            'HOR_salida' => 'Horario Salida',
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
