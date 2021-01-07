<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 *
 * @class CreateLoginsTable
 * @generated_by CI-Recharge
 * @package App
 * @extend Migration
 * @created_at 08 January, 2021 01:31:26 AM
 */

class CreateLoginsTable extends Migration
{
    public function up()
    {
        //disable Foreign Key Check
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
	    
		'id' => [
			'type' => 'BIGINT',
			'constraint' => 20,
			'null' => false,
		],
		'user_id' => [
			'type' => 'BIGINT',
			'constraint' => 20,
			'null' => false,
		],
		'created_at' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'updated_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
		'deleted_at' => [
			'type' => 'DATETIME',
			'null' => true,
		],
	    ]);
        



        $this->forge->createTable('logins');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        //disable Foreign Key Check
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('logins');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
    }
}
