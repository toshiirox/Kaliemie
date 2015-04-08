<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ActesVisites;

/**
 * ActesVisitesSearch represents the model behind the search form about `app\models\ActesVisites`.
 */
class ActesVisitesSearch extends ActesVisites
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idVisite', 'idActes', 'estFait'], 'integer'],
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
        $query = ActesVisites::find();

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
            'idVisite' => $this->idVisite,
            'idActes' => $this->idActes,
            'estFait' => $this->estFait,
        ]);

        return $dataProvider;
    }
}
