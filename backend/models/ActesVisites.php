<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ActesVisites".
 *
 * @property integer $idVisite
 * @property integer $idActes
 */
class ActesVisites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ActesVisites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVisite', 'idActes'], 'required'],
            [['idVisite', 'idActes'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idVisite' => 'Id Visite',
            'idActes' => 'Id Actes',
        ];
    }
}
