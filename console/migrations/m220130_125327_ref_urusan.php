<?php

use yii\db\Migration;

/**
 * Class m220130_125327_ref_urusan
 */
class m220130_125327_ref_urusan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_urusan', [
            'tahun' =>$this->smallInteger()->notNULL(),
            'kd_urusan' =>$this->tinyInteger()->notNULL(),
            'nm_urusan' =>$this->string()->notNULL(),
            'create_at' =>$this->timestamp(),
            'update_at' =>$this->datetime(),
        ]);

        $this->addPrimaryKey('pk_ref_urusan', 'ref_urusan', ['kd_urusan',]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220130_125327_ref_urusan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220130_125327_ref_urusan cannot be reverted.\n";

        return false;
    }
    */
}
