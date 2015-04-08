<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_soins".
 *
 * @property integer $id
 * @property string $libel
 * @property string $description
 * @property integer $id_categ_soins
 *
 * @property Soins[] $soins
 * @property CategSoins $idCategSoins
 */
class TypeSoins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_soins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['libel', 'id_categ_soins'], 'required'],
            [['libel', 'description'], 'string'],
            [['id_categ_soins'], 'integer']
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
            'id_categ_soins' => 'Id Categ Soins',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSoins()
    {
        return $this->hasMany(Soins::className(), ['id_type_soins' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategSoins()
    {
        return $this->hasOne(CategSoins::className(), ['id' => 'id_categ_soins']);
    }
}
