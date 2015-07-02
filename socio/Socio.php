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
 * @property string $SO_direccion
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
            [['SO_nombre', 'SO_apellido_materno', 'SO_apellido_paterno', 'SO_direccion'], 'string', 'max' => 50],
          [['SO_rut'], 'validarRut'],
            [['SO_rut'], 'unique', 'message'=>'Rut ya existe'],
          [['SO_nombre'], 'required', 'message'=>'compo requerido'],
          [['SO_apellido_materno'], 'required', 'message'=>'compo requerido'],
          [['SO_apellido_paterno'], 'required', 'message'=>'compo requerido'],
          [['SO_direccion'], 'required', 'message'=>'compo requerido'],
          [['SO_rut'], 'required', 'message'=>'compo requerido'],

          [['SO_nombre'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],
          [['SO_apellido_paterno'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],
          [['SO_apellido_materno'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],

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
            'SO_direccion' => 'Direccion',
        ];
    }




public function validarRut($attribute, $params) {
        $data = explode('-', $this->SO_rut);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 10)
            $result = 'K';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('SO_rut', 'Rut inválido.');
    }


}










