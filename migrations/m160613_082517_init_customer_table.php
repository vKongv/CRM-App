<?php

use yii\db\Migration;

class m160613_082517_init_customer_table extends Migration
{
    public function up()
    {
      //Create customer table
      $this->createTable(
        'customer',
        [
          'id' => 'pk',
          'name' => 'string',
          'birth_date' => 'date',
          'notes' => 'text',
        ],
        'ENGINE=InnoDB'
      );

      //Create phone table
      $this->createTable(
        'phone',
        [
          'id' => 'pk',
          'customer_id' => 'int unique',
          'number' => 'string',
        ],
        'ENGINE=InnoDB'
        );

        //Create foreign key between customer and phone
        $this->addForeignKey('customer_phone_numbers', 'phone', 'customer_id', 'customer', 'id');
    }

    public function down()
    {
        $this->dropTable('customer');
        $this->dropForeignKey('customer_phone_numbers', 'phone');
        $this->dropTable('phone');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
