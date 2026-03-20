<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateComentariosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'posts_id'   => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
            'comentario' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'created_id' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'null'    => false,
            ],
            'updated_id' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'null'    => true,
                'on_update' => 'CURRENT_TIMESTAMP',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('posts_id', 'posts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('comentarios');
    }

    public function down()
    {
        $this->forge->dropTable('comentarios');
    }
}
