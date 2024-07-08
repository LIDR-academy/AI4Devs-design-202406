<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyJobPostsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('job_posts', [
            'salary_range' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'after' => 'requirements', // Opcional: especifica después de qué columna agregar
            ],
            'work_schedule' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'after' => 'salary_range',
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'after' => 'work_schedule',
            ],
            'company' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'after' => 'location',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('job_posts', ['salary_range', 'work_schedule', 'location', 'company']);
    }
}