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
 * @property string $commentaireVisite
 *
 * @property ActesVisites[] $actesVisites
 * @property Soins[] $idActes
 * @property Infirmieres $idInfirmieres0
 * @property Patient $idPatient0
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
            [['commentaireVisite'], 'string'],
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
            'idInfirmieres' => 'Infirmière',
            'idPatient' => 'Patient',
            'DateDebut' => 'Date Debut',
            'DateFin' => 'Date Fin',
            'commentaireVisite' => 'Commentaire Visite',
            '$this->getNomInfirmieres()'=> 'Nom',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActesVisites()
    {
        return $this->hasMany(ActesVisites::className(), ['idVisite' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdActes()
    {
        return $this->hasMany(Soins::className(), ['id' => 'idActes'])->viaTable('ActesVisites', ['idVisite' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */

    public function getNomInfirmieres()
    {
             $x = Infirmieres::findOne($this->getIdInfirmieres0());
        return $x->nom;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdInfirmieres0()
    {
        return $this->hasOne(Infirmieres::className(), ['id' => 'idInfirmieres']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPatient0()
    {
        return $this->hasOne(Patient::className(), ['identifiant' => 'idPatient']);
    }
}
