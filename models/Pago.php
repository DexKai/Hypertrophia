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
            'SO_id' => 'Ingrese el socio correspondiente al pago ',
            'PA_monto' => 'Ingrese el  Monto',
            'PA_pago_mes' => 'Ingrese si el pago se efectuo en el Mes',
            'PA_fecha_pago' => 'Ingrese la Fecha Pago',
        ];
    }
}
