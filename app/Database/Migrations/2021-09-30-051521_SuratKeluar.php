<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SuratKeluar extends Migration
{
    public function up()
    {
            $this->forge->addField([
                'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => true
                ],
                'nomor' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100
                ],
                
                'nama' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100
                
                ],
                'tanggal' => [
                    'type' => 'DATE',
                    'null' => true
                ],
                'tujuan' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100
                ],
                'dok' => [
                    'type' => 'MEDIUMBLOB',
                    'null' => true
                ]
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('suratkeluar');
    }

    public function down()
    {
            $this->forge->dropTable('suratkeluar');
    }
}

