<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ref_urusan".
 *
 * @property int $tahun
 * @property int $kd_urusan
 * @property string $nm_urusan
 * @property string $create_at
 * @property string|null $update_at
 */
class RefUrusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_urusan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'kd_urusan', 'nm_urusan'], 'required'],
            [['tahun', 'kd_urusan'], 'integer'],
            [['create_at', 'update_at'], 'safe'],
            [['nm_urusan'], 'string', 'max' => 255],
            [['kd_urusan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tahun' => 'Tahun',
            'kd_urusan' => 'Kd Urusan',
            'nm_urusan' => 'Nm Urusan',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
