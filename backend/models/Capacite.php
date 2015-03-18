<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "capacite".
 *
 * @property integer $idInfirmiere
 * @property integer $idActes
 */
class Capacite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'capacite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idInfirmiere', 'idActes'], 'required'],
            [['idInfirmiere', 'idActes'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idInfirmiere' => 'Id Infirmiere',
            'idActes' => 'Id Actes',
        ];
    }
}
