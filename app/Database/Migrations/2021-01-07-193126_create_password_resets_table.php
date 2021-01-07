<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 *
 * @class CreatePasswordResetsTable
 * @generated_by CI-Recharge
 * @package App
 * @extend Migration
 * @created_at 08 January, 2021 01:31:26 AM
 */

class CreatePasswordResetsTable extends Migration
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
			'auto_increment' => true,
		],
		'email' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'token' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'meta_data' => [
			'type' => 'TEXT',
			'null' => false,
		],
		'request_ip' => [
			'type' => 'VARCHAR',
			'constraint' => 64,
			'null' => true,
		],
		'request_agent' => [
			'type' => 'LONGTEXT',
			'null' => false,
		],
		'verify_ip' => [
			'type' => 'VARCHAR',
			'constraint' => 64,
			'null' => true,
		],
		'verify_agent' => [
			'type' => 'LONGTEXT',
			'null' => false,
		],
		'expired_at' => [
			'type' => 'DATETIME',
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
        
		$this->forge->addPrimaryKey('id');



        $this->forge->createTable('password_resets');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        //disable Foreign Key Check
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('password_resets');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
    }
}
