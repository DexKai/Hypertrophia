<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pago".
 *
 * @property integer $PA_id
 * @property integer $SO_id
 * @property integer $PA_monto
 * @property integer $PA_pago_mes
 * @property string $PA_fecha_pago
 */
class Pago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SO_id', 'PA_monto', 'PA_pago_mes'], 'integer'],
            [['PA_fecha_pago'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PA_id' => 'Pa ID',
            'SO_id' => 'So ID',
            'PA_monto' => 'Pa Monto',
            'PA_pago_mes' => 'Pa Pago Mes',
            'PA_fecha_pago' => 'Pa Fecha Pago',
        ];
    }
}
