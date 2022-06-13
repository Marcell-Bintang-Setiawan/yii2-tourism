<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_tourism".
 *
 * @property int $id
 * @property string $nama
 * @property string $jam
 * @property string $tiket
 * @property string $lokasi
 * @property string|null $gambar
 */
class TblTourism extends \yii\db\ActiveRecord
{

    public $gambar1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_tourism';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jam', 'tiket', 'lokasi'], 'required'],
            [['nama', 'jam', 'tiket', 'lokasi', 'gambar'], 'string', 'max' => 255],
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
            'jam' => 'Jam',
            'tiket' => 'Tiket',
            'lokasi' => 'Lokasi',
            'gambar' => 'Gambar',
        ];
    }
}
