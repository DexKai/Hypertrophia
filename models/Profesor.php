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
            [['PRO_rut'], 'string', 'max' => 10],
            [['PRO_nombre', 'PRO_apellidop', 'PRO_apellidom'], 'string', 'max' => 20],
            [['PRO_email'], 'string', 'max' => 100]
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
            'PRO_rut' => 'Pro Rut',
            'PRO_nombre' => 'Pro Nombre',
            'PRO_apellidop' => 'Pro Apellidop',
            'PRO_apellidom' => 'Pro Apellidom',
            'PRO_email' => 'Pro Email',
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
}
