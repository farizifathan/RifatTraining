<?php

use yii\db\Migration;

/**
 * Class m220130_131654_ref_sub_unit
 */
class m220130_131654_ref_sub_unit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_sub_unit', [
            'tahun' => $this->smallInteger()->notNull(),
            'kd_urusan' => $this->tinyInteger()->notNull(),
            'kd_bidang' => $this->tinyInteger()->notNull(),
            'kd_unit' => $this->tinyInteger()->notNull(),
            'kd_sub' => $this->tinyInteger()->notNull(),
            'nm_sub_unit' => $this->tinyInteger()->notNull(),
            'create_at' => $this->timestamp(),
            'update_at' => $this->datetime(),
    
            ]);
    
            $this->addPrimaryKey('pk_ref_sub_unit', 'ref_sub_unit', ['tahun', 'kd_urusan', 'kd_bidang', 'kd_unit', 'kd_sub']);
            $this->addForeignKey('fk_ref_sub_unit', 'ref_sub_unit', 
            ['tahun', 'kd_urusan', 'kd_bidang', 'kd_unit'], 'ref_unit',
            ['tahun', 'kd_urusan', 'kd_bidang', 'kd_unit'], 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220130_131654_ref_sub_unit cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220130_131654_ref_sub_unit cannot be reverted.\n";

        return false;
    }
    */
}
