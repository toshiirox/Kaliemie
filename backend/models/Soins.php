<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soins".
 *
 * @property integer $id
 * @property string $libel
 * @property string $description
 * @property integer $id_type_soins
 * @property string $date
 *
 * @property ActesVisites[] $actesVisites
 * @property Visites[] $idVisites
 * @property Capacite[] $capacites
 * @property Infirmieres[] $idInfirmieres
 * @property TypeSoins $idTypeSoins
 */
class Soins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['libel', 'id_type_soins'], 'required'],
            [['libel', 'description'], 'string'],
            [['id_type_soins'], 'integer'],
            [['date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'libel' => 'Libel',
            'description' => 'Description',
            'id_type_soins' => 'Id Type Soins',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActesVisites()
    {
        return $this->hasMany(ActesVisites::className(), ['idActes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVisites()
    {
        return $this->hasMany(Visites::className(), ['id' => 'idVisite'])->viaTable('ActesVisites', ['idActes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapacites()
    {
        return $this->hasMany(Capacite::className(), ['idActes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdInfirmieres()
    {
        return $this->hasMany(Infirmieres::className(), ['id' => 'idInfirmiere'])->viaTable('capacite', ['idActes' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTypeSoins()
    {
        return $this->hasOne(TypeSoins::className(), ['id' => 'id_type_soins']);
    }
}
