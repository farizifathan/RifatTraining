<?php

use yii\db\Migration;

/**
 * Class m220127_175849_ref_provinsi
 */
class m220127_175849_ref_provinsi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_provinsi', [
            'kd_prov' => $this->tinyInteger()->notNull(),
            'nama_prov' => $this->string()->notNull(),
            'create_at' => $this->timestamp(),
            'update_at' => $this->datetime(),
        ]);

        $this->addPrimaryKey('pk_ref_provinsi', 'ref_provinsi', ['kd_prov']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220127_175849_ref_provinsi cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220127_175849_ref_provinsi cannot be reverted.\n";

        return false;
    }
    */
}
