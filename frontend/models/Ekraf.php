<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ekraf".
 *
 * @property int $id
 * @property string $nama
 * @property string $lokasi
 * @property string $harga
 * @property string $gambar
 */
class Ekraf extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ekraf';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'lokasi', 'harga', 'gambar'], 'required'],
            [['nama', 'lokasi', 'harga', 'gambar'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'lokasi' => 'Lokasi',
            'harga' => 'Harga',
            'gambar' => 'Gambar',
        ];
    }
}
