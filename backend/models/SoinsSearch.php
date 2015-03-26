<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Soins;

/**
 * SoinsSearch represents the model behind the search form about `app\models\Soins`.
 */
class SoinsSearch extends Soins
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_type_soins'], 'integer'],
            [['libel', 'description', 'date'], 'safe'],
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
        $query = Soins::find();

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
            'id_type_soins' => $this->id_type_soins,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'libel', $this->libel])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
