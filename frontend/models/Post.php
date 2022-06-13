<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $judul
 * @property string $preview
 * @property string $deskripsi
 * @property string $author
 * @property string $created_at
 */
class Post extends \yii\db\ActiveRecord
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
            [['judul', 'preview', 'deskripsi', 'author', 'created_at'], 'required'],
            [['preview', 'deskripsi'], 'string'],
            [['created_at'], 'safe'],
            [['judul', 'author'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'preview' => 'Preview',
            'deskripsi' => 'Deskripsi',
            'author' => 'Author',
            'created_at' => 'Created At',
        ];
    }
}
