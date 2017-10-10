<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `city_column__employee`.
 */
class m170927_130639_drop_city_column__employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('employee', 'city');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->createTable('city_column__employee', [
            'id' => $this->primaryKey(),
        ]);
    }
}
