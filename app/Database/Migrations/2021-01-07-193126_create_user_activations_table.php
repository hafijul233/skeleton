<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Short description of this class usages
 *
 * @class CreateUserActivationsTable
 * @generated_by CI-Recharge
 * @package App
 * @extend Migration
 * @created_at 08 January, 2021 01:31:26 AM
 */

class CreateUserActivationsTable extends Migration
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
		'user_id' => [
			'type' => 'BIGINT',
			'constraint' => 20,
			'null' => false,
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
		'verify_ip' => [
			'type' => 'VARCHAR',
			'constraint' => 64,
			'null' => true,
		],
		'verify_agent' => [
			'type' => 'LONGTEXT',
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

		$this->forge->addKey('user_id');


		$this->forge->addForeignKey('matr','empregado','matr','CASCADE','CASCADE');
		$this->forge->addForeignKey('matr','scheme_holders','matr','CASCADE','CASCADE');
		$this->forge->addForeignKey('matr','user_activations','matr','CASCADE','CASCADE');
		$this->forge->addForeignKey('scheme_holder_id','empregado','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('scheme_holder_id','scheme_holders','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('scheme_holder_id','user_activations','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('user_id','empregado','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('user_id','scheme_holders','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('user_id','user_activations','id','CASCADE','CASCADE');
        $this->forge->createTable('user_activations');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
	}

    //--------------------------------------------------------------------

    public function down()
    {
        //disable Foreign Key Check
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('user_activations');

        //enable Foreign Key Check
        $this->db->enableForeignKeyChecks();
    }
}
