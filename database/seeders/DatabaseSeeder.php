<?php

namespace Database\Seeders;

use App\Models\RekamMedis;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        RekamMedis::factory(10)->create();
        Dokter::create([
            'name' => 'Budi'
        ]);
        Dokter::create([
            'name' => 'Andi'
        ]);
        Dokter::create([
            'name' => 'Doni'
        ]);
        Pasien::create([
            'name' => 'John Doe'
        ]);
        Pasien::create([
            'name' => 'Bish John'
        ]);
        Pasien::create([
            'name' => 'Reed Doe'
        ]);
    }
}
