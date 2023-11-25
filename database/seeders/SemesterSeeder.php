<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            [
                'semester_tahun' => 'Semester Ganjil - 2022/2023',
                'tanggal_mulai' => '2021-09-01',
                'tanggal_selesai' => '2022-02-28',
                'status' => 'Aktif',
            ]
        ]);

        foreach ($data as $key => $value) {
            Semester::create($value);
        }
    }
}
