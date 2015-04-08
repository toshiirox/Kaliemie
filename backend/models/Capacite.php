<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "capacite".
 *
 * @property integer $idInfirmiere
 * @property integer $idActes
 *
 * @property Infirmieres $idInfirmiere0
 * @property Soins $idActes0
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
            'idInfirmiere' => 'Infirmière',
            'idActes' => 'Capacité',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdInfirmiere0()
    {
        return $this->hasOne(Infirmieres::className(), ['id' => 'idInfirmiere']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdActes0()
    {
        return $this->hasOne(Soins::className(), ['id' => 'idActes']);
    }
}
