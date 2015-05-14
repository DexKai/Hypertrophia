<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor".
 *
 * @property integer $PRO_id
 * @property integer $HOR_id
 * @property integer $SUE_id
 * @property integer $IM_id
 * @property integer $TIP_id
 * @property string $PRO_rut
 * @property string $PRO_nombre
 * @property string $PRO_apellidop
 * @property string $PRO_apellidom
 * @property string $PRO_email
 *
 * @property FkSocioProfesor[] $fkSocioProfesors
 * @property Socio[] $sOs
 * @property Horario[] $horarios
 * @property InformeMedico[] $informeMedicos
 * @property InformeMedico $iM
 * @property Horario $hOR
 * @property Sueldo $sUE
 * @property TipoProfesor $tIP
 * @property Sueldo[] $sueldos
 * @property TipoProfesor[] $tipoProfesors
 */
class Profesor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOR_id', 'SUE_id', 'IM_id', 'TIP_id'], 'integer'],
            [['PRO_rut'], 'validarRut'],
            [['PRO_rut'], 'unique', 'message'=>'Rut ya existe'],
            [['PRO_rut'], 'required',  'message'=>'campo requerido'],

            [['PRO_nombre','PRO_apellidop', 'PRO_apellidom'], 'string', 'max' => 20],
            [['PRO_nombre','PRO_apellidop', 'PRO_apellidom'], 'required', 'message'=>'compo requerido'],

            [['PRO_nombre'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],
            [['PRO_apellidop'],'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],
            [['PRO_apellidom'],'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],

            [['PRO_email'], 'email'],
            [['PRO_email'], 'unique', 'message'=>'correo ya existe'],
            [['PRO_email'], 'required', 'message'=>'campo requerido'],
            [['PRO_nombre', 'PRO_apellidop', 'PRO_apellidom'], 'string', 'max' => 20],
            [['PRO_email'], 'email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PRO_id' => 'Pro ID',
            'HOR_id' => 'Hor ID',
            'SUE_id' => 'Sue ID',
            'IM_id' => 'Im ID',
            'TIP_id' => 'Tip ID',
            'PRO_nombre' => 'Nombre ',
            'PRO_apellidop' => 'Apellido paterno ',
            'PRO_rut' => 'Rut',
            'PRO_apellidom' => 'Apellido materno',
            'PRO_email' => 'Email',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkSocioProfesors()
    {
        return $this->hasMany(FkSocioProfesor::className(), ['PRO_id' => 'PRO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSOs()
    {
        return $this->hasMany(Socio::className(), ['SO_id' => 'SO_id'])->viaTable('fk_socio_profesor', ['PRO_id' => 'PRO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHorarios()
    {
        return $this->hasMany(Horario::className(), ['PRO_id' => 'PRO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformeMedicos()
    {
        return $this->hasMany(InformeMedico::className(), ['PRO_id' => 'PRO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIM()
    {
        return $this->hasOne(InformeMedico::className(), ['IM_id' => 'IM_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHOR()
    {
        return $this->hasOne(Horario::className(), ['HOR_id' => 'HOR_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSUE()
    {
        return $this->hasOne(Sueldo::className(), ['SUE_id' => 'SUE_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIP()
    {
        return $this->hasOne(TipoProfesor::className(), ['TIP_id' => 'TIP_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSueldos()
    {
        return $this->hasMany(Sueldo::className(), ['PRO_id' => 'PRO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoProfesors()
    {
        return $this->hasMany(TipoProfesor::className(), ['PRO_id' => 'PRO_id']);
    }


     public function getProNombre()
    {
        return $this->hasMany(Profesor::className(), ['PRO_id' => 'PRO_nombre']);
    }




   

    public function validarRut($attribute, $params) {
        $data = explode('-', $this->PRO_rut);
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
            $this->addError('PRO_rut', 'Rut inválido.');
    }


}
