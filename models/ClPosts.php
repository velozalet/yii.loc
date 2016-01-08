<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id_post
 * @property integer $id_user_post
 * @property string $post_title
 * @property string $post_text
 * @property integer $id_post_category
 * @property string $post_date
 */
class ClPosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user_post', 'post_title', 'post_text', 'id_post_category', 'post_date'], 'required'],
            [['id_user_post', 'id_post_category'], 'integer'],
            [['post_text'], 'string'],
            [['post_title'], 'string', 'max' => 255],
            [['post_date'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_post' => Yii::t('app', 'Id Post'),
            'id_user_post' => Yii::t('app', 'Id User Post'),
            'post_title' => Yii::t('app', 'Post Title'),
            'post_text' => Yii::t('app', 'Post Text'),
            'id_post_category' => Yii::t('app', 'Id Post Category'),
            'post_date' => Yii::t('app', 'Post Date'),
        ];
    }
}
