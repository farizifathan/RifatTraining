<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ref_provinsi".
 *
 * @property int $kd_prov
 * @property string $nama_prov
 * @property string $create_at
 * @property string|null $update_at
 *
 * @property RefKabkota[] $refKabkotas
 */
class RefProvinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_prov', 'nama_prov'], 'required'],
            [['kd_prov'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['nama_prov'], 'string', 'max' => 255],
            [['kd_prov'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_prov' => 'Kode Provinsi',
            'nama_prov' => 'Nama Provinsi',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    /**
     * Gets query for [[RefKabkotas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRefKabkotas()
    {
        return $this->hasMany(RefKabkota::className(), ['kd_prov' => 'kd_prov']);
    }
}
