<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 *
 * @class CreateLoginAttemptsTable
 * @generated_by CI-Recharge
 * @package App
 * @extend Migration
 * @created_at 08 January, 2021 01:31:26 AM
 */

class CreateLoginAttemptsTable extends Migration
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
		'credential' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'password' => [
			'type' => 'VARCHAR',
			'constraint' => 255,
			'null' => false,
		],
		'ip_address' => [
			'type' => 'VARCHAR',
			'constraint' => 64,
			'null' => false,
		],
		'user_agent' => [
			'type' => 'LONGTEXT',
			'null' => false,
		],
		'timestamp' => [
			'type' => 'DATETIME',
			'null' => false,
		],
		'succeed' => [
			'type' => 'TINYINT',
			'constraint' => 1,
			'null' => false,
			'default' => '0',
		],
	    ]);
        
		$this->forge->addPrimaryKey('id');



        $this->forge->createTable('login_attempts');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        //disable Foreign Key Check
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('login_attempts');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
    }
}
