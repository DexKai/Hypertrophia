<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sueldo".
 *
 * @property integer $SUE_id
 * @property integer $PRO_id
 * @property integer $SUE_sueldo
 *
 * @property Profesor[] $profesors
 * @property Profesor $pRO
 */
class Sueldo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sueldo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRO_id', 'SUE_sueldo'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SUE_id' => 'Sue ID',
            'PRO_id' => 'Pro ID',
            'SUE_sueldo' => 'Sue Sueldo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesors()
    {
        return $this->hasMany(Profesor::className(), ['SUE_id' => 'SUE_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPRO()
    {
        return $this->hasOne(Profesor::className(), ['PRO_id' => 'PRO_id']);
    }
}
