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
            
             [['PROG_peso'], 'number', 'max' => 300,'min' => 0],
              [['PROG_altura'], 'number', 'max' => 240,'min' => 100 ],
               [['PROG_porcentaje_grasa'], 'number', 'max' => 50,'min' => 2],
                [['PROG_indice_masa_corporal'], 'number', 'max' => 100,'min' => 10],
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
            'SO_id' => 'Socio al que corresponde el progreso',
            'PROG_peso' => 'Peso (KG)',
            'PROG_altura' => 'Altura (CM)',
            'PROG_porcentaje_grasa' => 'Porcentaje Grasa (%)',
            'PROG_indice_masa_corporal' => 'Indice Masa Corporal (IMC)',
            'PROG_fecha_evaluacion' => 'Fecha Evaluacion (formato AAAA-MM-DD HH:MM:SS ) ',
        ];
    }
}
