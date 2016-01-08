<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id_users
 * @property string $name
 * @property string $email
 * @property string $reg_date
 * @property string $role
 */
class ClUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'reg_date', 'role'], 'required'],
            [['name'], 'string', 'max' => 35],
            [['email'], 'string', 'max' => 30],
            [['reg_date'], 'string', 'max' => 25],
            [['role'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_users' => Yii::t('app', 'Id Users'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'reg_date' => Yii::t('app', 'Reg Date'),
            'role' => Yii::t('app', 'Role'),
        ];
    }
}
