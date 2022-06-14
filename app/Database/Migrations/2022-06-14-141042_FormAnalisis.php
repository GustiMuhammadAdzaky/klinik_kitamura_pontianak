<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FormAnalisis extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
			'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
			'pendidikan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
			'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
			'suku' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
			'tinggi_badan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_rawat_inap');
	}

	public function down()
	{
		$this->forge->dropTable('tb_rawat_inap');
	}
}