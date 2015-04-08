<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TypeSoins;

/**
 * TypeSoinsSearch represents the model behind the search form about `app\models\TypeSoins`.
 */
class TypeSoinsSearch extends TypeSoins
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_categ_soins'], 'integer'],
            [['libel', 'description'], 'safe'],
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
        $query = TypeSoins::find();

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
            'id_categ_soins' => $this->id_categ_soins,
        ]);

        $query->andFilterWhere(['like', 'libel', $this->libel])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
