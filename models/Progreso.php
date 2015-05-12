<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "progreso".
 *
 * @property integer $PROG_id
 * @property integer $SO_id
 * @property double $PROG_peso
 * @property double $PROG_altura
 * @property double $PROG_porcentaje_grasa
 * @property double $PROG_indice_masa_corporal
 * @property string $PROG_fecha_evaluacion
 */
class Progreso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'progreso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SO_id'], 'integer'],
            [['PROG_peso', 'PROG_altura', 'PROG_porcentaje_grasa', 'PROG_indice_masa_corporal'], 'number'],
            [['PROG_fecha_evaluacion'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PROG_id' => 'Prog ID',
            'SO_id' => 'Ingrese el socio al que corresponde el progreso',
            'PROG_peso' => 'Peso',
            'PROG_altura' => 'Altura',
            'PROG_porcentaje_grasa' => 'Porcentaje Grasa',
            'PROG_indice_masa_corporal' => 'Indice Masa Corporal',
            'PROG_fecha_evaluacion' => 'Fecha Evaluacion',
        ];
    }
}
