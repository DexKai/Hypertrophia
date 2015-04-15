<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_profesor".
 *
 * @property integer $TIP_id
 * @property string $TIP_nombre
 *
 * @property Profesor[] $profesors
 */
class TipoProfesor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_profesor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TIP_nombre'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TIP_id' => 'Tip ID',
            'TIP_nombre' => 'Tip Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfesors()
    {
        return $this->hasMany(Profesor::className(), ['TIP_id' => 'TIP_id']);
    }
}
