<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor".
 *
 * @property integer $PRO_id
 * @property string $PRO_nombre
 * @property string $PRO_apellido
 * @property string $PRO_rut
 * @property string $PRO_email
 * @property integer $HOR_id
 * @property integer $SUE_id
 * @property integer $TIP_id
 *
 * @property Horario $hOR
 * @property Sueldo $sUE
 * @property TipoProfesor $tIP
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
            [['PRO_nombre', 'PRO_apellido', 'PRO_rut', 'PRO_email'], 'required'],
            [['HOR_id', 'SUE_id', 'TIP_id'], 'integer'],
            [['PRO_nombre', 'PRO_apellido', 'PRO_email'], 'string', 'max' => 100],
            [['PRO_rut'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PRO_id' => 'Pro ID',
            'PRO_nombre' => 'Pro Nombre',
            'PRO_apellido' => 'Pro Apellido',
            'PRO_rut' => 'Pro Rut',
            'PRO_email' => 'Pro Email',
            'HOR_id' => 'Hor ID',
            'SUE_id' => 'Sue ID',
            'TIP_id' => 'Tip ID',
        ];
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
}
