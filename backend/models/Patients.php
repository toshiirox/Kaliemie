<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Patients".
 *
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 */
class Patients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Patients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'prenom', 'adresse'], 'required'],
            [['nom', 'prenom'], 'string', 'max' => 50],
            [['adresse'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nom' => 'Nom',
            'prenom' => 'Prenom',
            'adresse' => 'Adresse',
        ];
    }
}
