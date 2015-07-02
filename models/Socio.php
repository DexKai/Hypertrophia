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
 * @property integer $user_id
 *
 * @property FkSocioProfesor[] $fkSocioProfesors
 * @property Profesor[] $pROs
 * @property InformeMedico[] $informeMedicos
 * @property Pago[] $pagos
 * @property Progreso[] $progresos
 * @property InformeMedico $iM
 * @property Pago $pA
 * @property Progreso $pROG
 * @property User $user
 * @property User[] $users
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
<<<<<<< HEAD
            [['PROG_id', 'IM_id', 'PA_id', 'user_id'], 'integer'],
            [['SO_rut', 'SO_nombre', 'SO_apellido_materno', 'SO_apellido_paterno', 'SO_direccion'], 'string', 'max' => 256],
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
=======
            [['PROG_id', 'IM_id', 'PA_id'], 'integer'],

            [['SO_nombre', 'SO_apellido_materno', 'SO_apellido_paterno', 'SO_direccion', 'SO_estado_actividad'], 'string', 'max' => 20],
          
          [['SO_rut'], 'validarRut'],
          
            [['SO_rut'], 'unique', 'message'=>'Rut ya existe'],
             [['SO_rut'],'validarSoloNumerosYGuion'],
          [['SO_email'], 'email'],
          
            [['SO_email'], 'unique', 'message'=>'correo ya existe'],
          
          [['SO_nombre'], 'required', 'message'=>'compo requerido'],
          
          [['SO_apellido_materno'], 'required', 'message'=>'compo requerido'],
          
          [['SO_apellido_paterno'], 'required', 'message'=>'compo requerido'],
          
          [['SO_direccion'], 'required', 'message'=>'compo requerido'],
          
          [['SO_rut'], 'required', 'message'=>'compo requerido'],
          
          [['SO_email'], 'required', 'message'=>'compo requerido'],
          
          [['SO_estado_actividad'], 'required', 'message'=>'compo requerido'],

          [['SO_nombre'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],
          [['SO_apellido_paterno'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],
          [['SO_apellido_materno'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],

>>>>>>> origin/master
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
            'SO_direccion' => 'Dirección',
            'user_id' => 'Usuario',
        ];
    }

<<<<<<< HEAD
    public function validarRut($attribute, $params) {
=======




 public function validarSoloNumerosYGuion($attribute,$params)
        {
        
          $pattern ='/(?!^[0-9]*$)(-)/';

         
        if(!preg_match($pattern, $this->$attribute))
          $this->addError($attribute, 
          'Rut solo debe contener digitos y un guion');
          
        }



public function validarRut($attribute, $params) {
>>>>>>> origin/master
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




    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkSocioProfesors()
    {
        return $this->hasMany(FkSocioProfesor::className(), ['SO_id' => 'SO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPROs()
    {
        return $this->hasMany(Profesor::className(), ['PRO_id' => 'PRO_id'])->viaTable('fk_socio_profesor', ['SO_id' => 'SO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformeMedicos()
    {
        return $this->hasMany(InformeMedico::className(), ['SO_id' => 'SO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagos()
    {
        return $this->hasMany(Pago::className(), ['SO_id' => 'SO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgresos()
    {
        return $this->hasMany(Progreso::className(), ['SO_id' => 'SO_id']);
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
    public function getPA()
    {
        return $this->hasOne(Pago::className(), ['PA_id' => 'PA_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPROG()
    {
        return $this->hasOne(Progreso::className(), ['PROG_id' => 'PROG_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['SO_id' => 'SO_id']);
    }
}
