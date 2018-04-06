<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $blog_id
 * @property string $blog_name
 * @property string $blog_desc
 * @property int $blog_time
 * @property int $status
 */
class blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blog_time', 'status'], 'integer'],
            [['blog_name'], 'string', 'max' => 50],
            [['blog_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'blog_id' => 'Blog ID',
            'blog_name' => 'Blog Name',
            'blog_desc' => 'Blog Desc',
            'blog_time' => 'Blog Time',
            'status' => 'Status',
        ];
    }
}
