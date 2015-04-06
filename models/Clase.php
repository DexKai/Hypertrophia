<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clase".
 *
 * @property integer $id_clase
 * @property string $nombre_clase
 * @property string $descripcion_clase
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
            [['nombre_clase', 'descripcion_clase'], 'required'],
            [['nombre_clase'], 'string', 'max' => 128],
            [['descripcion_clase'], 'string', 'max' => 1280]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_clase' => 'Id Clase',
            'nombre_clase' => 'Nombre Clase',
            'descripcion_clase' => 'Descripcion Clase',
        ];
    }
}
