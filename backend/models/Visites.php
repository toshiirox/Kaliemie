<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Visites".
 *
 * @property integer $id
 * @property integer $idInfirmieres
 * @property integer $idPatient
 * @property string $DateDebut
 * @property string $DateFin
 */
class Visites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Visites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idInfirmieres', 'idPatient', 'DateDebut', 'DateFin'], 'required'],
            [['idInfirmieres', 'idPatient'], 'integer'],
            [['DateDebut', 'DateFin'], 'safe'],
            [['idInfirmieres'], 'unique'],
            [['idPatient'], 'unique'],
            [['idInfirmieres', 'idPatient', 'DateDebut'], 'unique', 'targetAttribute' => ['idInfirmieres', 'idPatient', 'DateDebut'], 'message' => 'The combination of Id Infirmieres, Id Patient and Date Debut has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idInfirmieres' => 'Id Infirmieres',
            'idPatient' => 'Id Patient',
            'DateDebut' => 'Date Debut',
            'DateFin' => 'Date Fin',
        ];
    }
}
