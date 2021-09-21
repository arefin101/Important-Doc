<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Export;

class ExportTableSeeder extends Seeder
{
    public function run()
    {
        $count = 500;
        Export::factory()->count(500)->create();
    }
}
