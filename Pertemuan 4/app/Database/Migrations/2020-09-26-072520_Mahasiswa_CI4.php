<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MahasiswaCI4 extends Migration
{
	public function up()
	{
		//Define Mahasiswa_CI4 table
		$this->forge->addField([
			'NIM' 	=> [
						'type'			=>	'VARCHAR',
						'constraint'	=>	'9',
			],
			'Nama'	=> [
						'type'			=>	'TEXT'
			],
			'Agama'	=> [
						'type'			=>	'TEXT',
						'constraint'	=>	'2'
			],
			'Olahraga_Favorit' => [
						'type'			=> 'TEXT'
			],
			'Jenis_Kelamin'	   => [
						'type'			=> 'VARCHAR(2)'
			]
		]);
		$this->forge->addKey('NIM', TRUE);
		$this->forge->createTable('Mahasiswa_CI4', TRUE);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
