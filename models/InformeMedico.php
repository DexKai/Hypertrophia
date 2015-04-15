<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "informe_medico".
 *
 * @property integer $IM_id
 * @property integer $SO_id
 * @property integer $PRO_id
 * @property integer $IM_cardiacas
 * @property integer $IM_alergias
 * @property integer $IM_osea
 * @property integer $IM_muscular
 * @property integer $IM_asfixia
 * @property integer $IM_embarazada
 * @property integer $IM_anemia
 * @property integer $IM_alergia
 * @property string $IM_medicamentos
 *
 * @property Profesor $pRO
 * @property Socio $sO
 * @property Profesor[] $profesors
 * @property Socio[] $socios
 */
class InformeMedico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'informe_medico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SO_id', 'PRO_id', 'IM_cardiacas', 'IM_alergias', 'IM_osea', 'IM_muscular', 'IM_asfixia', 'IM_embarazada', 'IM_anemia', 'IM_alergia'], 'integer'],
            [['IM_medicamentos'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IM_id' => 'Im ID',
            'SO_id' => 'So ID',
            'PRO_id' => 'Pro ID',
            'IM_cardiacas' => 'Im Cardiacas',
            'IM_alergias' => 'Im Alergias',
            'IM_osea' => 'Im Osea',
            'IM_muscular' => 'Im Muscular',
            'IM_asfixia' => 'Im Asfixia',
            'IM_embarazada' => 'Im Embarazada',
            'IM_anemia' => 'Im Anemia',
            'IM_alergia' => 'Im Alergia',
            'IM_medicamentos' => 'Im Medicamentos',
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
    public function getSO()
    {
        return $this->hasOne(Socio::className(), ['SO_id' => 'SO_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesors()
    {
        return $this->hasMany(Profesor::className(), ['IM_id' => 'IM_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocios()
    {
        return $this->hasMany(Socio::className(), ['IM_id' => 'IM_id']);
    }
}
