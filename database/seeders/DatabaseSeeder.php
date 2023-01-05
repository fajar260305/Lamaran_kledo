<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Reference;
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
        // \App\Models\User::factory(10)->create();

        $salary = 3000000;
        $upah_lembur = 20000;
        $durasi_lembur = 2;
        Reference::create([
            "code" => "mtd1",
            "name" => $salary/173,
            "expression" => ($salary/173)*$durasi_lembur,
        ]);
        Reference::create([
            "code" => "mtd2",
            "name" => $upah_lembur,
            "expression" => $upah_lembur*$durasi_lembur,
        ]);

        Setting::create([
            'key' => "mtd2",
            "value" => 2
        ]);

    }
}
