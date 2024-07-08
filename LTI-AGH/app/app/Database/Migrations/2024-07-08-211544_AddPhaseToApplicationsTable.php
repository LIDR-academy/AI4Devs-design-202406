<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhaseToApplicationsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('applications', [
            'phase' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'default' => 'applied',
                'null' => false,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('applications', 'phase');
    }
}