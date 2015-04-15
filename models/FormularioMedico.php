<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formulario_medico".
 *
 * @property integer $FM_id
 * @property integer $FM_cardiacas
 * @property integer $FM_alegias
 * @property integer $FM_osea
 * @property integer $FM_muscular
 * @property integer $FM_asfixia
 * @property integer $FM_embarazada
 * @property integer $FIM_anemia
 * @property integer $FM_alergia
 * @property string $FM_medicamentos
 */
class FormularioMedico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'formulario_medico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FM_cardiacas', 'FM_alegias', 'FM_osea', 'FM_muscular', 'FM_asfixia', 'FM_embarazada', 'FIM_anemia', 'FM_alergia', 'FM_medicamentos'], 'required'],
            [['FM_cardiacas', 'FM_alegias', 'FM_osea', 'FM_muscular', 'FM_asfixia', 'FM_embarazada', 'FIM_anemia', 'FM_alergia'], 'integer'],
            [['FM_medicamentos'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FM_id' => 'Fm ID',
            'FM_cardiacas' => 'Fm Cardiacas',
            'FM_alegias' => 'Fm Alegias',
            'FM_osea' => 'Fm Osea',
            'FM_muscular' => 'Fm Muscular',
            'FM_asfixia' => 'Fm Asfixia',
            'FM_embarazada' => 'Fm Embarazada',
            'FIM_anemia' => 'Fim Anemia',
            'FM_alergia' => 'Fm Alergia',
            'FM_medicamentos' => 'Fm Medicamentos',
        ];
    }
}
