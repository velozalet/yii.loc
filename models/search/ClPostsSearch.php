<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClPosts;

/**
 * ClPostsSearch represents the model behind the search form about `app\models\ClPosts`.
 */
class ClPostsSearch extends ClPosts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_post', 'id_user_post', 'id_post_category'], 'integer'],
            [['post_title', 'post_text', 'post_date'], 'safe'],
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
        $query = ClPosts::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_post' => $this->id_post,
            'id_user_post' => $this->id_user_post,
            'id_post_category' => $this->id_post_category,
        ]);

        $query->andFilterWhere(['like', 'post_title', $this->post_title])
            ->andFilterWhere(['like', 'post_text', $this->post_text])
            ->andFilterWhere(['like', 'post_date', $this->post_date]);

        return $dataProvider;
    }
}
