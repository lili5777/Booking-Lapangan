<?php

namespace Database\Seeders;

use App\Models\operasional as ModelsOperasional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class operasional extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $opa = [
            [
                'jam_buka_222142' => '09:00:00',
                'jam_tutup_222142' => '22:00:00',
            ]
        ];

        foreach ($opa as $value) {
            DB::table('operasionals_222142')->insert($value);
        }
    }
}
