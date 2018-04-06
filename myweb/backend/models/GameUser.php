<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game_user".
 *
 * @property int $user_id
 * @property string $user_name
 * @property string $user_pwd
 * @property string $key 登陆i密钥
 */
class GameUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'game_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name'], 'string', 'max' => 50],
            [['user_pwd', 'key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_pwd' => 'User Pwd',
            'key' => 'Key',
        ];
    }
}
