<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medic;
use App\Models\patient;
use App\Models\doctor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        patient::factory(10)->create();
        doctor::factory(4)->create();
        Medic::factory(1)->create();
    }
}
