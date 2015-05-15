<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property integer $DIS_id
 * @property string $DIS_nombre
 * @property string $DIS_descripcion
 *
 * @property Clase[] $clases
 * @property FkDisciplinaTipoProfesor[] $fkDisciplinaTipoProfesors
 * @property TipoProfesor[] $tIPs
 */
class Disciplina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disciplina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DIS_descripcion'], 'string'],
            [['DIS_descripcion'], 'required', 'message'=>'Campo requerido'],
            [['DIS_descripcion'],'match',"pattern" => '/^[0-9a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras y números'],
            [['DIS_nombre'], 'string', 'max' => 256],
            [['DIS_nombre'], 'required', 'message'=>'Campo requerido'],
            [['DIS_nombre'],'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DIS_id' => Yii::t('app', 'ID'),
            'DIS_nombre' => Yii::t('app', 'Nombre'),
            'DIS_descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClases()
    {
        return $this->hasMany(Clase::className(), ['DIS_id' => 'DIS_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDisciplinaTipoProfesors()
    {
        return $this->hasMany(FkDisciplinaTipoProfesor::className(), ['DIS_id' => 'DIS_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTIPs()
    {
        return $this->hasMany(TipoProfesor::className(), ['TIP_id' => 'TIP_id'])->viaTable('fk_disciplina_tipo_profesor', ['DIS_id' => 'DIS_id']);
    }
}
