<?php

use yii\db\Migration;

/**
 * Class m220127_180410_ref_kabkota
 */
class m220127_180410_ref_kabkota extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_kabkota', [
            'kd_prov' => $this->tinyInteger()->notNull(),
            'kd_kabkota' => $this->smallInteger()->notNull(),
            'nama_kabkota' => $this->string()->notNull(),
            'create_at' => $this->timestamp(),
            'update_at' => $this->datetime(),
        ]);

        $this->addPrimaryKey('pk_ref_kabkota', 'ref_kabkota', ['kd_prov', 'kd_kabkota']);
        $this->addForeignKey('fk_ref_provinsi', 'ref_kabkota', ['kd_prov'], 'ref_provinsi', ['kd_prov'], 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220127_180410_ref_kabkota cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220127_180410_ref_kabkota cannot be reverted.\n";

        return false;
    }
    */
}
