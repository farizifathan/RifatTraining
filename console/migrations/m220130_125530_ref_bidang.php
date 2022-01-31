<?php

use yii\db\Migration;

/**
 * Class m220130_125530_ref_bidang
 */
class m220130_125530_ref_bidang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_bidang', [
            'tahun' => $this->smallInteger()->notNull(),
            'kd_urusan' => $this->tinyInteger()->notNull(),
            'kd_bidang' => $this->tinyInteger()->notNull(),
            'kd_fungsi' => $this->tinyInteger()->notNull(),
            'nm_bidang' => $this->string()->notNull(),
            'create_at' => $this->timestamp(),
            'update_at' => $this->datetime(),
    
    
            ]);
    
            $this->addPrimaryKey('pk_ref_bidang', 'ref_bidang', ['tahun', 'kd_urusan', 'kd_bidang', 'kd_fungsi']);
            $this->addForeignKey('fk_ref_bidang', 'ref_bidang', 
            ['kd_urusan'], 'ref_urusan',
            ['kd_urusan'], 'CASCADE', 'CASCADE');
            
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220130_125530_ref_bidang cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220130_125530_ref_bidang cannot be reverted.\n";

        return false;
    }
    */
}
