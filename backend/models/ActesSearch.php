<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Actes;

/**
 * ActesSearch represents the model behind the search form about `app\models\Actes`.
 */
class ActesSearch extends Actes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'duree'], 'integer'],
            [['libellee', 'description'], 'safe'],
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
        $query = Actes::find();

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
            'duree' => $this->duree,
        ]);

        $query->andFilterWhere(['like', 'libellee', $this->libellee])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
