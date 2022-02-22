<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
    $this->forge->addField([
        'id'                => ['type'=> 'INT','constraint' => 11,'unsigned' => true,'auto_increment' => true ],
        'materi'            => ['type'=> 'VARCHAR','constraint' => 100],
        'group'             => ['type'=> 'VARCHAR','constraint' => 255],
        'created_at'        => ['type' => 'datetime', 'null' => true],
        'updated_at'        => ['type' => 'datetime', 'null' => true],
        'deleted_at'        => ['type' => 'datetime', 'null' => true],
    ]);

    $this->forge->addPrimaryKey('id', true);
    $this->forge->createTable('materi');
}

public function down()
{
    $this->forge->dropTable('materi',true);
}
}
