<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 *
 * @class CreateUsersTable
 * @generated_by CI-Recharge
 * @package App
 * @extend Migration
 * @created_at 08 January, 2021 01:31:26 AM
 */

class CreateUsersTable extends Migration
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
			'unsigned' => true,
			'auto_increment' => true,
		],
		'email' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'username' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'password' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'force_reset' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
			'default' => '0',
		],
		'status' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'status_message' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => true,
		],
		'created_at' => [
			'type' => 'DATETIME',
			'null' => true,
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
        
		$this->forge->addPrimaryKey('id');



        $this->forge->createTable('users');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        //disable Foreign Key Check
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('users');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
    }
}
