<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ActesVisites".
 *
 * @property integer $idVisite
 * @property integer $idActes
 * @property integer $estFait
 *
 * @property Visites $idVisite0
 * @property Soins $idActes0
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
            [['idVisite', 'idActes', 'estFait'], 'required'],
            [['idVisite', 'idActes', 'estFait'], 'integer']
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
            'estFait' => 'Est Fait',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVisite0()
    {
        return $this->hasOne(Visites::className(), ['id' => 'idVisite']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdActes0()
    {
        return $this->hasOne(Soins::className(), ['id' => 'idActes']);
    }
}
