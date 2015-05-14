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
            [['SO_id', 'PA_monto'], 'integer'],
            [[ 'PA_monto', ], 'integer'],
            [[ 'PA_pago_mes'], 'string'],
            [['PA_fecha_pago'], 'safe'],
             [['SO_id', 'PA_monto', 'PA_pago_mes','PA_fecha_pago'], 'required', 'message'=>'compo requerido']

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PA_id' => 'Pa ID',
            'SO_id' => 'socio',
            'PA_monto' => 'Monto(CLP sin puntos)',
            'PA_pago_mes' => 'Efectuo este Mes',
            'PA_fecha_pago' => 'Si se efectuo el pago.Ingrese la Fecha Pago(formato AAAA-MM-DD HH:MM:SS)',
        ];
    }
}
