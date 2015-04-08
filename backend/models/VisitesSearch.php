<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Visites;

/**
 * VisitesSearch represents the model behind the search form about `app\models\Visites`.
 */
class VisitesSearch extends Visites
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idInfirmieres', 'idPatient'], 'integer'],
            [['DateDebut', 'DateFin', 'commentaireVisite'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Visites::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'idInfirmieres' => $this->idInfirmieres,
            'idPatient' => $this->idPatient,
            'DateDebut' => $this->DateDebut,
            'DateFin' => $this->DateFin,
        ]);

        $query->andFilterWhere(['like', 'commentaireVisite', $this->commentaireVisite]);

        return $dataProvider;
    }
}
