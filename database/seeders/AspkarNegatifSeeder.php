<?php

namespace Database\Seeders;

use App\Models\AspkarNegatif;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AspkarNegatifSeeder extends Seeder
{
    /*
    DISIPILIN	
    1.	Taruna wajib duduk sesuai ketentuan
	2.	Taruna wajib berdiri sesuai ketentuan
	3.	Taruna wajib berjalan sesuai ketentuan
	4.	Taruna wajib berlari sesuai ketentuan
	5.	Taruna berpakaian tidak sesuai ketentuan
	6.	Taruna berpakaian tidak sesuai peruntukannya
	7.	Taruna mengenakan jam tangan tidak sesuai ketentuan
	8.	Taruna wajib menjaga kebersihan, kerapian, dan keindahan lingkungan
	9.	Taruna tidak mentaati ketentuan dalam mengunjungi kafe atau kantin di lingungan akpol
	10.	Taruna makan tidak sesuai ketentuan
	11.	Taruna tidur tidak sesuai ketentuan
	12.	Taruna berbicara melalui telepon tidak secara ringkas, ramah dan jelas serta sopan dan memperhatikan kepentingan orang lain
	13.	Taruna wajib melaporkan pada kesempatan pertama kepada Pengasuh apabila menemukan permasalahan atau kesulitan serta dapat meminta izin bantuan ke kantor Polisi terdekat
	14.	Taruna menyelesaikan penugasan atau pembuatan produk tidak sesuai ketentuan

    SEDERHANA	
    1.	Taruna wajib mengeola uang saku yang diterima dari lembaga setiap bulan secara benar
    
    EMPATI	
    1.	Taruna wajib memiliki rasa empati kepada orang yang sakit
	2.	Taruna wajib memiliki rasa empati kepada orang yang meninggal
	3.	Taruna wajib menerima tamu dengan baik dan sopan
    
    INTEGRITAS	
    1.	Taruna menjaga etika dan sikap yang baik selama berbelanja

    */

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ([
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '1',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib duduk sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '2',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib berdiri sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '3',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib berjalan sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '4',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib berlari sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '5',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna berpakaian tidak sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '6',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna berpakaian tidak sesuai peruntukannya',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '7',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna mengenakan jam tangan tidak sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '8',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib menjaga kebersihan, kerapian, dan keindahan lingkungan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '9',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna tidak mentaati ketentuan dalam mengunjungi kafe atau kantin di lingungan akpol',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '10',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna makan tidak sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '11',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna tidur tidak sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '12',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna berbicara melalui telepon tidak secara ringkas, ramah dan jelas serta sopan dan memperhatikan kepentingan orang lain',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '13',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib melaporkan pada kesempatan pertama kepada Pengasuh apabila menemukan permasalahan atau kesulitan serta dapat meminta izin bantuan ke kantor Polisi terdekat',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Disiplin',
                'no' => '14',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna menyelesaikan penugasan atau pembuatan produk tidak sesuai ketentuan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Sederhana',
                'no' => '1',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib mengeola uang saku yang diterima dari lembaga setiap bulan secara benar',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Empati',
                'no' => '1',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib memiliki rasa empati kepada orang yang sakit',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Empati',
                'no' => '2',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib memiliki rasa empati kepada orang yang meninggal',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Empati',
                'no' => '3',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna wajib menerima tamu dengan baik dan sopan',
                'bobot' => '0.17',
            ],
            [
                'penggolongan' => '1',
                'karakter' => 'Integritas',
                'no' => '1',
                'dasar_hukum' => '-',
                'deskripsi' => 'Taruna menjaga etika dan sikap yang baik selama berbelanja',
                'bobot' => '0.17',
            ],
        ]);

        foreach ($data as $key => $value) {
            AspkarNegatif::create($value);
        }
    }
}
