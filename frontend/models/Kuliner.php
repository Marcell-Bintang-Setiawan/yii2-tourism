<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kuliner".
 *
 * @property int $id
 * @property string $nama
 * @property string $harga
 * @property string $lokasi
 * @property string $deskripsi
 * @property string $gambar
 */
class Kuliner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuliner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'harga', 'lokasi', 'deskripsi', 'gambar'], 'required'],
            [['lokasi', 'deskripsi'], 'string'],
            [['nama', 'harga'], 'string', 'max' => 255],
            [['gambar'], 'string', 'max' => 500],
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
            'harga' => 'Harga',
            'lokasi' => 'Lokasi',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
        ];
    }
}
