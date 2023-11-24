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
        $type = 'SMT';
        $uuid = Str::uuid()->toString();
        $uuid_second = substr($uuid, 9, 4);
        $uuid_third = substr($uuid, 14, 4);
        $uuid_fourth = substr($uuid, 19, 4);
        $uuid_fifth = substr($uuid, 24, 12);
        $no = str_pad(Semester::whereDate('created_at', date('Y-m-d'))->count() + 1, 7, '0', STR_PAD_LEFT);
        $uid = $type . '.' . $uuid_fifth . $uuid_second . $uuid_third . $uuid_fourth . '.' . $no;

        Semester::create([
            'uuid' => $uid,
            'semester_tahun' => 'Semester Ganjil - 2022/2023',
            'tanggal_mulai' => '2021-09-01',
            'tanggal_selesai' => '2022-02-28',
            'status' => 'Aktif',
        ]);
    }
}
