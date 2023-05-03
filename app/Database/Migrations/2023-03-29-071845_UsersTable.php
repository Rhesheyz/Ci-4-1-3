<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTable extends Migration
{
    public function up()
    {
        $this->forge->addFIeld([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'nis' => [
                'type' => 'INT'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
            ],
            'role' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ]
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->addUniqueKey("email");
        $this->forge->createTable("users");
    }

    public function down()
    {
        $this->forge->dropTable("users");
    }
}