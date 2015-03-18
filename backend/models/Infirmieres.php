<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Infirmieres".
 *
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 */
class Infirmieres extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Infirmieres';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'prenom'], 'required'],
            [['nom', 'prenom'], 'string', 'max' => 50]
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
        ];
    }
}
