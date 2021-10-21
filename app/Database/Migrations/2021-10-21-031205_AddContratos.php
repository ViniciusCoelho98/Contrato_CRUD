<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddContratos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'empresa'       => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
                'null' => false,
            ],
            'cnpj' => [
                'type' => 'CHAR',
                'constraint' => '18',
                'null' => false,
            ],
            'dataInicio' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'dataFim' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contratos');
    }

    public function down()
    {
        $this->forge->dropTable('contratos');
    }
}
