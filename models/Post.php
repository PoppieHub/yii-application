<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $heading
 * @property string $content
 * @property string $short_description
 * @property string|null $image
 * @property string $publication_date
 * @property int|null $category_id
 *
 * @property Category $category
 */
class Post extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['heading', 'content', 'short_description', 'publication_date'], 'required'],
            [['content', 'short_description'], 'string'],
            [['publication_date'], 'safe'],
            [['category_id'], 'integer'],
            [['heading', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heading' => 'Heading',
            'content' => 'Content',
            'short_description' => 'Short Description',
            'image' => 'Image',
            'publication_date' => 'Publication Date',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }


}
