<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Actes".
 *
 * @property integer $id
 * @property integer $duree
 * @property string $libellee
 * @property string $description
 */
class Actes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Actes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['duree', 'libellee', 'description'], 'required'],
            [['duree'], 'integer'],
            [['description'], 'string'],
            [['libellee'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'duree' => 'Duree',
            'libellee' => 'Libellee',
            'description' => 'Description',
        ];
    }
}
