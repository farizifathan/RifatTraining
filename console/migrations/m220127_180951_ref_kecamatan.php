<?php

use yii\db\Migration;

/**
 * Class m220127_180951_ref_kecamatan
 */
class m220127_180951_ref_kecamatan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_kecamatan', [
            'kd_prov' => $this->tinyInteger()->notNull(),
            'kd_kabkota' => $this->smallInteger()->notNull(),
            'kd_kecamatan' => $this->integer()->notNull(),
            'nama_kecamatan' => $this->string()->notNull(),
            'create_at' => $this->timestamp(),
            'update_at' => $this->datetime(),
            
        ]);

        $this->addPrimaryKey('pk_ref_kecamatan', 'ref_kecamatan', ['kd_prov', 'kd_kabkota', 'kd_kecamatan']);
        $this->addForeignKey('fk_ref_kecamatan', 'ref_kecamatan',
        ['kd_prov', 'kd_kabkota'], 'ref_kabkota', ['kd_prov', 'kd_kabkota'], 'CASCADE', 'CASCADE');
    
    
    
    
        }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220127_180951_ref_kecamatan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220127_180951_ref_kecamatan cannot be reverted.\n";

        return false;
    }
    */
}
