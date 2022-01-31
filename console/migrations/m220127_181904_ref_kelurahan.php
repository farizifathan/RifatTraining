<?php

use yii\db\Migration;

/**
 * Class m220127_181904_ref_kelurahan
 */
class m220127_181904_ref_kelurahan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_kelurahan', [
            'kd_prov' => $this->tinyInteger()->notNull(),
            'kd_kabkota' => $this->smallInteger()->notNull(),
            'kd_kecamatan' => $this->integer()->notNull(),
            'kd_kelurahan' => $this->integer()->notNull(),
            'nama_kelurahan' => $this->string()->notNull(),
            'create_at' => $this->timestamp(),
            'update_at' => $this->datetime(),
            
        ]);


        $this->addPrimaryKey('pk_ref_kelurahan', 'ref_kelurahan', ['kd_prov', 'kd_kabkota', 'kd_kecamatan', 'kd_kelurahan']);
        $this->addForeignKey('fk_ref_kelurahan', 'ref_kelurahan',
        ['kd_prov', 'kd_kabkota', 'kd_kecamatan'], 'ref_kecamatan', ['kd_prov', 'kd_kabkota', 'kd_kecamatan'], 'CASCADE', 'CASCADE');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220127_181904_ref_kelurahan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220127_181904_ref_kelurahan cannot be reverted.\n";

        return false;
    }
    */
}
