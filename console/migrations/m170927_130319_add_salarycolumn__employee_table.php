<?php

use yii\db\Migration;

class m170927_130319_add_salarycolumn__employee_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('employee', 'salary', $this->integer(100));
    }

    public function safeDown()
    {
        echo "m170927_130319_add_salarycolumn__employee_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170927_130319_add_salarycolumn__employee_table cannot be reverted.\n";

        return false;
    }
    */
}
