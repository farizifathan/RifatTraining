<?php

use yii\db\Migration;

/**
 * Class m220130_130655_ref_unit
 */
class m220130_130655_ref_unit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_unit', [
            'tahun' => $this->smallInteger()->notNull(),
            'kd_urusan' => $this->tinyInteger()->notNull(),
            'kd_bidang' => $this->tinyInteger()->notNull(),
            'kd_unit' => $this->tinyInteger()->notNull(),
            'nm_unit' => $this->string()->notNull(),
            'id_unit' => $this->tinyInteger()->notNull(),
            'create_at' => $this->timestamp(),
            'update_at' => $this->datetime(),

        ]);
            $this->addPrimaryKey('pk_ref_unit', 'ref_unit', ['tahun', 'kd_urusan', 'kd_bidang', 'kd_unit', 'nm_unit']);
            $this->addForeignKey('fk_ref_unit', 'ref_unit', 
            ['tahun', 'kd_urusan', 'kd_bidang'], 'ref_bidang',
            ['tahun', 'kd_urusan', 'kd_bidang'], 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220130_130655_ref_unit cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220130_130655_ref_unit cannot be reverted.\n";

        return false;
    }
    */
}
