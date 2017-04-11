<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Curses;

/**
 * CursesSearch represents the model behind the search form about `app\models\Curses`.
 */
class CursesSearch extends Curses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teach_salary', 'student_payment'], 'integer'],
            [['name', 'lesson', 'teacher', 'date_start', 'date_end', 'type_payment'], 'safe'],
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
        $query = Curses::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'teach_salary' => $this->teach_salary,
            'student_payment' => $this->student_payment,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'lesson', $this->lesson])
            ->andFilterWhere(['like', 'teacher', $this->teacher])
            ->andFilterWhere(['like', 'type_payment', $this->type_payment]);

        return $dataProvider;
    }
}
