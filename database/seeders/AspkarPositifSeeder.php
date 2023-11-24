<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AspkarPositifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aspkar_positifs')->insert([
            [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000001',
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '1',
                'keterangan' => 'Melaksanakan shalat fardu berjamaah di masjid (islam), kebaktian di gereja (kristen), sembahyang di pura (hindu) di dalam lingkungan akpol',
                'item' => 'Maksimum kegiatan dalam sebulan',
                'bobot' => '0.67',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000002',
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '1',
                'keterangan' => 'Melaksanakan shalat fardu berjamaah di masjid (islam), kebaktian di gereja (kristen), sembahyang di pura (hindu) di luar lingkungan akpol',
                'item' => 'Tidak melakukan 1 kali dalam sebulan',
                'bobot' => '0.5',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000003',
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '1',
                'keterangan' => 'Melaksanakan shalat fardu berjamaah di masjid (islam), kebaktian di gereja
                (kristen), sembahyang di pura (hindu) di luar lingkungan akpol',
                'item' => 'Tidak melakukan 2 kali dalam sebulan',
                'bobot' => '0.17',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000004',
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunnah sesuai dengan ajarannya',
                'item' => '4 kali atau lebih dalam sebulan',
                'bobot' => '0.67',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000005',
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunnah sesuai dengan ajarannya',
                'item' => '3 kali dalam sebulan',
                'bobot' => '0.5',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000006',
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'b',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunnah sesuai dengan ajarannya',
                'item' => '2 kali atau lebih dalam sebulan',
                'bobot' => '0.33',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000007',
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'b',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunnah sesuai dengan ajarannya',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.17',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000008',
                'tingkat' => '1',
                'bab' => 'B2',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '1',
                'keterangan' => 'Melaksanakan shalat fardu berjamaah di masjid (islam), kebaktian di gereja (kristen), sembahyang di pura (hindu) di dalam lingkungan akpol',
                'item' => 'Maksimum kegiatan dalam sebulan',
                'bobot' => '0.67',
            ], [
                'uuid' => 'KARP.6677e7359c2f075b4dba83c.0000009',
                'tingkat' => '1',
                'bab' => 'B2',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajarannya',
                'no' => '1',
                'keterangan' => 'Melaksanakan shalat fardu berjamaah di masjid (islam), kebaktian di gereja (kristen), sembahyang di pura (hindu) di luar lingkungan akpol',
                'item' => 'Tidak melakukan 1 kali dalam sebulan',
                'bobot' => '0.5',
            ],
        ]);
    }
}
