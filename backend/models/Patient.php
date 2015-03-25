<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $identifiant
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * @property string $codePostal
 * @property string $ville
 * @property string $telephone
 * @property string $dateNaiss
 * @property string $commentaireVisite
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identifiant', 'nom', 'prenom', 'adresse', 'codePostal', 'ville', 'telephone', 'dateNaiss', 'commentaireVisite'], 'required'],
            [['identifiant'], 'integer'],
            [['dateNaiss'], 'safe'],
            [['commentaireVisite'], 'string'],
            [['nom', 'prenom', 'adresse', 'ville'], 'string', 'max' => 50],
            [['codePostal'], 'string', 'max' => 5],
            [['telephone'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'identifiant' => 'Identifiant',
            'nom' => 'Nom',
            'prenom' => 'Prenom',
            'adresse' => 'Adresse',
            'codePostal' => 'Code Postal',
            'ville' => 'Ville',
            'telephone' => 'Telephone',
            'dateNaiss' => 'Date Naiss',
            'commentaireVisite' => 'Commentaire Visite',
        ];
    }
}
