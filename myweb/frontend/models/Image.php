<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $image_id
 * @property string $image_name
 * @property string $image_desc
 * @property string $image_url
 * @property int $image_cate
 * @property int $status
 * @property int $image_time
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_desc'], 'string'],
            [['image_cate', 'status', 'image_time'], 'integer'],
            [['image_name'], 'string', 'max' => 60],
            [['image_url'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'image_id' => 'Image ID',
            'image_name' => 'Image Name',
            'image_desc' => 'Image Desc',
            'image_url' => 'Image Url',
            'image_cate' => 'Image Cate',
            'status' => 'Status',
            'image_time' => 'Image Time',
        ];
    }
}
