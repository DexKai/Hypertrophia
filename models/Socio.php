<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "socio".
 *
 * @property integer $SO_id
 * @property integer $PROG_id
 * @property integer $IM_id
 * @property integer $PA_id
 * @property string $SO_rut
 * @property string $SO_nombre
 * @property string $SO_apellido_materno
 * @property string $SO_apellido_paterno
 * @property string $SO_email
 * @property string $SO_direccion
 * @property string $SO_estado_actividad
 */
class Socio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'socio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROG_id', 'IM_id', 'PA_id'], 'integer'],
            [['SO_rut', 'SO_nombre', 'SO_apellido_materno', 'SO_apellido_paterno', 'SO_email', 'SO_direccion', 'SO_estado_actividad'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SO_id' => 'So ID',
            'PROG_id' => 'Prog ID',
            'IM_id' => 'Im ID',
            'PA_id' => 'Pa ID',
            'SO_rut' => 'Rut',
            'SO_nombre' => 'Nombre',
            'SO_apellido_materno' => 'Apellido Materno',
            'SO_apellido_paterno' => 'Apellido Paterno',
            'SO_email' => 'Email',
            'SO_direccion' => 'Direccion',
            'SO_estado_actividad' => 'Estado Actividad',
        ];
    }
}
