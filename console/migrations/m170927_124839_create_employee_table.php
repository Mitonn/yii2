<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m170927_124839_create_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'surname' => $this->string(30),
            'birth_date' => $this->date(),
            'start_date' => $this->date(),
            'experience' => $this->integer(10),
            'position' => $this->string(50),
            'department' => $this->string(50),
            'identification_code' => $this->integer(5),
            'email' => $this->string(30)->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee');
    }
}
