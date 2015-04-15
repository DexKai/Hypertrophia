<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clase".
 *
 * @property integer $CLA_id
 * @property integer $DIS_id
 * @property string $CLA_nombre
 * @property string $CLA_descripcion
 * @property string $CLA_imagen
 *
 * @property Disciplina $dIS
 */
class Clase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DIS_id'], 'integer'],
            [['CLA_descripcion'], 'string'],
            [['CLA_nombre'], 'string', 'max' => 20],
            [['CLA_imagen'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CLA_id' => 'Cla ID',
            'DIS_id' => 'Dis ID',
            'CLA_nombre' => 'Cla Nombre',
            'CLA_descripcion' => 'Cla Descripcion',
            'CLA_imagen' => 'Cla Imagen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDIS()
    {
        return $this->hasOne(Disciplina::className(), ['DIS_id' => 'DIS_id']);
    }
}
