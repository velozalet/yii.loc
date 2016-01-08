<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_category".
 *
 * @property integer $id_category
 * @property string $category_name
 */
class ClPostCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_category' => Yii::t('app', 'Id Category'),
            'category_name' => Yii::t('app', 'Category Name'),
        ];
    }


   //_____________________________________________testing

}
