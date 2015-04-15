<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "informe_medico".
 *
 * @property integer $IM_id
 * @property integer $SO_id
 * @property integer $PRO_id
 * @property string $IM_cardiacas
 * @property string $IM_cardicas_detalle
 * @property string $IM_alergias
 * @property string $IM_alergia_detalle
 * @property string $IM_osea
 * @property string $IM_osea_detalle
 * @property string $IM_muscular
 * @property string $IM_muscualr_detalle
 * @property string $IM_asfixia
 * @property string $IM_embarazada
 * @property string $IM_anemia
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
            [['SO_id', 'PRO_id'], 'integer'],
            [['IM_cardicas_detalle', 'IM_alergia_detalle', 'IM_osea_detalle', 'IM_muscualr_detalle', 'IM_medicamentos'], 'string'],
            [['IM_cardiacas', 'IM_alergias', 'IM_osea', 'IM_muscular', 'IM_asfixia', 'IM_embarazada', 'IM_anemia'], 'string', 'max' => 10]
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
            'IM_cardicas_detalle' => 'Im Cardicas Detalle',
            'IM_alergias' => 'Im Alergias',
            'IM_alergia_detalle' => 'Im Alergia Detalle',
            'IM_osea' => 'Im Osea',
            'IM_osea_detalle' => 'Im Osea Detalle',
            'IM_muscular' => 'Im Muscular',
            'IM_muscualr_detalle' => 'Im Muscualr Detalle',
            'IM_asfixia' => 'Im Asfixia',
            'IM_embarazada' => 'Im Embarazada',
            'IM_anemia' => 'Im Anemia',
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
