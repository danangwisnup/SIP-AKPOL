<?php

namespace Database\Seeders;

use App\Models\AspkarPositif;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AspkarPositifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* 
        B1	KEIMANAN DAN KETAKWAAN
        a.	Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya	
        1.	Melaksanakan salat fardhu berjamaah di masjid (islam); kebaktidan di gereja (nasranani); sembahyang di pura (hindu) di dalam lingkungan Akpol	
			Maksimum kegiatan dalam sebulan	0.67
			Tidak melakukan 1 kali dalam sebulan	0.50
			Tidak melakukan 2 kali dalam sebulan	0.17
		2.	Melaksanakan ibadah sunah (salat sunah Tahajud) (muslim) atau ibadah tambahan sejenis (non muslim) (hindu melaksanakan ibadah Tilem, Purnama dan ibadah lain sejenis ditempat yang telah ditentukan) (Nasrani melaksanakan ibadah pagi sebelum olahraga pagi)	
			4 kali atau lebih dalam sebulan	0.67
			3 kali dalam sebulan	0.50
			2 kali dalam sebulan	0.33
			1 kali dalam sebulan	0.17
        b.	Aktivitas belajar ilmu atau kemampuan spesifik untuk peningkatan Iman dan takwa	
        1.	Ikut aktif sebagai peserta dalam majelis ilmu keagamaan (Pengajian dsb), persekutuan doa, Parisada Hindu Pharma Indonesia (PHDI)	
			4 kali atau lebih dalam sebulan (kecuali piket dan sakit tetapi tidak termasuk sakit menahun	1.33
			3 kali dalam sebulan	1.00
			2 kali dalam sebulan	0.67
			1 kali dalam sebulan	0.33
        c.	Kedermawanan sosial dan menjaga kerukunan antar umat beragama	
        1.	Infak dan sedekah (muslim), persembahan (kristen), dana punia (hindu) atau memberikan sumbangan materil ke rumah ibadah	
			1 kali atau lebih dalam sebulan	0.44
        2.	Terlibat dalam kepanitiaan hari besar keagamaan atau terlibat dalam pengurus tempat ibadah	
			1 kali atau lebih dalam sebulan	0.44
        3.	Korve bersama di tempat ibadah agama yang berbeda	
			1 kali atau lebih dalam sebulan	0.44

        B2	ASPEK CINTA TANAH AIR
        a.	Berperan sebagai warga negara Republik Indonesia yang setia pada NKRI, bangga dan cinta tanah air dan Memiliki jiwa nasionalisme dan semangat kebhinekatunggalikaan serta menghormati simbol-simbol persatuan dan kesatuan bangsa (Bahasa, Bendera, Lambangan, dan Lagu Kebangsaan)	1.	Mengikuti upacara tanggal 17 setiap bulan atau hari besar nasional dengan baik	
			1 kali atau lebih dalam sebulan	0.60
		2.	Menjadi petugas upacara/mengikuti deputasi upacara sesuai Sprin dinas	
			1 kali atau lebih dalam sebulan	0.60
		3.	Mampu menghafal lagu-lagu kebangsaan, Pancasila, Tribrata dan catur prasetya, mars dan himne Polri serta himne Taruna dengan baik	
			Hafal 4 item atau lebih	0.60
		4.	Mau mempelajari kesenian daerah lain dan budaya dari daerah lain	
			1 kali atau lebih dalam sebulan	0.60
		5.	Melaporkan kepada atasaannya apabila mengetahui ada hal yang dapat membahayakan dan/atau merugikan negara/pemerintah (laporan diserta dokumentasi)	
			1 kali / lebih dalam sebulan	0.60


        B3	DEMOKRASI
        a.	Kemampuan menilai persamaan hak dan kewajiban dengan orang lain	
        1.	Mau menerima pendapat orang lain dan memberi kesempatan yang sama dan tidak memonopoli jalannya musyawarah dalam memecahkan sebuah masalah	
			1 kali atau lebih dalam sebulan	0.33
        b.	Berpartisipasi langsung dan aktif dalam pengambilan keputusan	
        1.	Aktif dan berani menyampaikan pendapat pada saat ada arahan pimpinan, forum resmi, dan dalam forum lingkup detasemen dan kompi	
			1 kali atau lebih dalam sebulan	0.33
        c.	Membiasakan musyawarah mufakat dalam mengambil keputusan dengan menjujung tinggi prinsip persamaan dan menghargai pendapat orang lain	
        1.	Mampu menghafal lagu-lagu kebangsaan, Pancasila, Tribrata dan catur prasetya, mars dan himne Polri serta himne Taruna dengan baik	
			1 kali atau lebih dalam sebulan	0.33

        B4	DISIPLIN
        a.	Sikap patuh dan taat terhadap segala bentuk peraturan yang berlaku (di dalam/luar lembaga pendidikan)	
        1.	Menepati dan tidak melanggar semua peraturan dan kegiatan	
			Tidak melakukan pelanggaran dalam sebulan	1.00
        B.	Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD	
        1.	Tepat waktu dalam kegiatan pengasuhan rutin dan non rutin	
			Selalu tepat waktu dalam sebulan  0.50
			Terlambat 1 kali dalam sebulan	0.38
			Terlambat 2 kali dalam sebulan	0.25
			Terlambat 3 kali dalam sebulan	0.13
		2.	Mendapatkan Pujian PUD dari pengasuh	
			Pujian 4 kali atau lebih dalam sebulan	0.50
			Pujian 3 kali dalam sebulan	0.38
			Pujian 2 kali dalam sebulan	0.25
			Pujian 1 kali dalam sebulan	0.13

        B5	KERJA KERAS DAN CERDAS
        a.	Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi	
        1.	Menambah waktu belajar mandiri di luar jadwal yang telah ditetapkan dan melaporkan hasil/resume/ringkasan materi yang dipelajari segera setelah kegiatan	
			2 kali atau lebih dalam sebulan	0.40
			1 kali dalam sebulan	0.20
		2.	Menambah waktu belajar mandiri di Perpustakaan atau membeli buku di Toko Buku dan membuat resume di Luar Jadwal yang Telah Ditetapkan melaporkan hasil/resume/ringkasan buku	
			2 kali atau lebih dalam sebulan	0.40
			1 kali dalam sebulan	0.20
		3.	Melakukan kelompok belajar mandiri atau bergabung ke dalam kelompok penelitian, diskusi, SOP dsb yang melibatkan internal/eksternal Akpol	
			2 kali atau lebih dalam sebulan	0.40
			1 kali dalam sebulan	0.20
		4.	Membantu GIAT operasi kepolisian (Gatur Lalin, TPTKP Lakalantas, sosialisasi Harkamtibmas, dsb)	
			1 kali atau lebih dalam sebulan	0.40
		5.	Inisiatif meningkatkan kemampuan kesamaptaan dengan olahraga mandiri diluar waktu olahraga rutin dan sebelumnya melaporkan kepada Pawas atau berhasil menurunkan berat badan min 2 kg	
			2 kali atau lebih dalam sebulan atau turun min 2kg	0.40
            
        B6	PROEFISONAL
        a.	Kemampuan untuk melksanakan tugas sesuai bidang profesinya serta mengembangkan dan mengaplikasikan ilmu pengetahuan dan keterampilan teknis kepolisian	
        1.	Berperan aktif dalam kelompok-kelompok yang menghasilkan buku panduan atau diktat atau SOP untuk bisa menjalani kehidupan tarunan dengan maksimal pada masing-masing tingkatan atau memberi ide positif/terobosan kreatif dalam kehidupan Taruna atau perbaikan lingkungan yang dituangkan dalam bentuk tulisan	
			1 kali atau lebih dalam sebulan	0.33
		2.	Aktif mengunjungi kesatuan kepolisian di wilayah saat kegiatan diluar kampus (cuti, Weekend, Pesiar) dalam mengetahui perkembangan teknis kepolisian dengan membuat laporan perkembangan teknis kepolisian sesuai materi perkuliahan	
			1 kali atau lebih dalam sebulan	0.33
		3.	Melaksanakan tugas kedinasan (piket) Taruna sesuai ketentuan dalam hal waktu, penampilan, pemahaman tugas dan fungsi, tanggung jawab sesuai tingkatannya	
			Melaksanakan Piket dengan baik (Seluruh Faktor terpenuhi)	0.33
        b.	Prestasi terbaik, mental, akademi, dan kesehatan jasmani	
        1.	Prestasi nilai Mental Terbaik detasemen	
			10 terbaik tiap semester	0.33
		2.	Prestasi nilai jasmani Terbaik detasemen	
			10 terbaik tiap semester	0.33
		3.	Tidak Her Akademik	
			Tidak Her Akademik dalam satu semester	0.33


        
            B7	SEDERHANA	
a.	Mampu menunjukkan sikap bersahaja dan tidak berlebih-lebihan baik dalam perilaku dan penampilan	1.	Mengonsumsi makanan yang sudah disiapkan oleh dinas	
			Selalu makan yang disiapkan dinas	0.5
		2.	Menggunakan gamtar standar pembagian dari dinas	
			Selalu menggunakan gamtar dinas	0.5
b.	Mampu mengajak lingkungan sekitarnya untuk mengembangkan sikap hidup dan tutur kata yang sederhana	1.	Mampu bersikap hidup sederhana (dengan membawa uang tidak melebihi 5 kali jumlah uang saku yang diberikan lembaga)	
			Selalu bersikap hidup sederhana	0.33
		2.	Mampu bertutur kata yang sopan dan tidak menyombongkan diri	
			Selalu bertutur kata yang sopan	0.33
		3.	Mampu berperilaku sederhana pada saat kegiatan di luar Ksatrian Akpol (nonton/makan/belanja/pesta Kor/kegiatan sosial lainnya)	
			Selalu berperilaku sederhana pada saat kegiatan di luar Ksatrian Aktpol	0.33

            B8	EMPATI	
a.	Kemampuan untuk mengetahui dan ikut merasakan apa yang orang lain pikirkan dan rasakan serta bertindak untuk membantu	1.	Menjenguk Taruna/antap Akpol sakit yang dirawat di KSA atau RS rujukan Akpol pada waktu pesiar/IBL/cuti	
			1 kali atau lebih dalam sebulan	0.67
		2.	Ikut dalam kegiatan baksos atas inisiatif sendiri dan menggunakan biaya pribadi (bukan dari dinas) atau donor darah	
			1 kali atau lebih dalam sebulan	0.67
		3.	Mengenal lingkungan sekitar dengan berkunjung ke rumah pejabat Akpol	
			1 kali atau lebih dalam sebulan	0.67
B9	JUJUR DAN IKHLAS	
a.	Mampu untuk bertindak, mengakui, berkata secara jujur apa yang sebenar-benarnya terjadi	1.	Membiasakan berkata dan berbuat jujur dalam kesehariannya atau membiasakan pengakuan terhadap kesalahan dan permohonan maaf	
			Selalu membiasakan berkata dan berbuat jujur dalam kesehariannya atau membiasakan pengakuan terhadap kesalahan dan permohonan maaf	1.33
		2.	Berani menegur dan mengingatkan serta melaporkan teman atau orang lain yang melakukan pelanggaran	
			1 kali dalam sebulan	1.33
		3.	Jujur dalam kegiatan akademik dengan tidak menitip absen, mencontek saat ujian atau saat mengerjakan tugas (plagiat)	
			Selalu jujur dalam kegiatan akademik dengan tidak mencontek saat ujian atau saat mengerjakan tugas (plagiat)	1.33
B10	ADIL	
a.	Sikap yang tidak memihak kecuali kepada kebenaran serta berani membela keadilan	
1.	Mampu berpendapat atau bersikap untuk berpihak kepada kebenaran atau berani membela orang lain yang diperlakukan tidak adil	
			1 kali atau lebih dalam sebulan	1
		2.	Tidak pilih kasih dalam setiap kegiatan dan menjaga keseimbangan antara hak dan kewajiban bersama	
			1 kali atau lebih dalam sebulan	1

            B11	TELADAN
a.	Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain	1.	Mendapatkan nilai NSP 3 (tiga) terbaik setiap bulannya per Sat	
			Terbaik 1	0.33
			Terbaik 2	0.25
			Terbaik 3	0.17
		2.	Penilaian positif atas kinerja sebagai pejabat korp	
			4 kali dalam atau lebih dalam sebulan	0.33
			3 kali dalam sebulan	0.25
			2 kali dalam sebulan	0.17
			1 kali dalam sebulan	0.08
		3.	Memiliki penampilan yang baik dan rapih pada saat apel TI atau pemeriksaan oleh pengasuh	
			Pujian 2 kali atau lebih dalam sebulan	0.33
			Pujian 1 kali dalam sebulan	0.25
b.	Prestasi berdasarkan sosiometri	1.	Masuk peringkat 20 besar sosiometri setingkat detasemen	
			1-5 terbaik dalam sebulan	0.50
			6-10 terbaik dalam sebulan	0.38
			11-15 terbaik dalam sebulan	0.25
			16-20 terbaik dalam sebulan	0.13
		2.	Masuk peringkat 3 besar sosiometri setingkat satuan	
			Terbaik 1 dalam sebulan	0.50
			Terbaik 2 dalam sebulan	0.38
			Terbaik 3 dalam sebulan	0.25
B12	INTEGRITAS
a.	Bertindak konsisten sesuai dengan nilai-nilai kode etik, bertanggung jawab, jujur, benar, menepati kata-kata, setia, dan berkomitmen dan melaksanakan tugas yang diberikan dengan tanggung jawab	1.	Aktif Mengunjungi Kesatuan Kepolisian di Wilayah saat Kegiatan di Luar Kampus (cuti, Weekend, pesiar) dalam mengetahui Perkembangan Teknis Kepolisian dengan membuat laporan perkembangan teknis kepolisian sesuai materi perkuliahan	
			Selalu konsisten dan tidak melanggar semua peraturan selama dua bulan berturut-turut	1.33
		2.	Mampu mempertahanakn atau meningkatkan prestasi karakter	
			Nilai NSP bulan berikutnya mengalami kenaikan	1.33
			Nilai NSP tetap (sama dengan bulan sebelumnya)	1.00
		3.	Melaksanakan deputasi dengan baik	
			1 kali atau lebih dalam sebulan (deputasi yang memerlukan latihan)	1.33
			1 kali atau lebih dalam sebulan (deputasi yang tidak memerlukan latihan)	0.75

        */

        $data = ([

            // Bab 1
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya',
                'no' => '1',
                'keterangan' => 'Melaksanakan salat fardhu berjamaah di masjid (islam); kebaktidan di gereja (nasranani); sembahyang di pura (hindu) di dalam lingkungan Akpol',
                'item' => 'Maksimum kegiatan dalam sebulan',
                'bobot' => '0.67',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya',
                'no' => '1',
                'keterangan' => 'Melaksanakan salat fardhu berjamaah di masjid (islam); kebaktidan di gereja (nasranani); sembahyang di pura (hindu) di dalam lingkungan Akpol',
                'item' => 'Tidak melakukan 1 kali dalam sebulan',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya',
                'no' => '1',
                'keterangan' => 'Melaksanakan salat fardhu berjamaah di masjid (islam); kebaktidan di gereja (nasranani); sembahyang di pura (hindu) di dalam lingkungan Akpol',
                'item' => 'Tidak melakukan 2 kali dalam sebulan',
                'bobot' => '0.17',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunah (salat sunah Tahajud) (muslim) atau ibadah tambahan sejenis (non muslim) (hindu melaksanakan ibadah Tilem, Purnama dan ibadah lain sejenis ditempat yang telah ditentukan) (Nasrani melaksanakan ibadah pagi sebelum olahraga pagi)',
                'item' => '4 kali atau lebih dalam sebulan',
                'bobot' => '0.67',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunah (salat sunah Tahajud) (muslim) atau ibadah tambahan sejenis (non muslim) (hindu melaksanakan ibadah Tilem, Purnama dan ibadah lain sejenis ditempat yang telah ditentukan) (Nasrani melaksanakan ibadah pagi sebelum olahraga pagi)',
                'item' => '3 kali dalam sebulan',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunah (salat sunah Tahajud) (muslim) atau ibadah tambahan sejenis (non muslim) (hindu melaksanakan ibadah Tilem, Purnama dan ibadah lain sejenis ditempat yang telah ditentukan) (Nasrani melaksanakan ibadah pagi sebelum olahraga pagi)',
                'item' => '2 kali dalam sebulan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'a',
                'indikator' => 'Ibadah wajib/utama dan tambahan sesuai dengan ajaran agamanya',
                'no' => '2',
                'keterangan' => 'Melaksanakan ibadah sunah (salat sunah Tahajud) (muslim) atau ibadah tambahan sejenis (non muslim) (hindu melaksanakan ibadah Tilem, Purnama dan ibadah lain sejenis ditempat yang telah ditentukan) (Nasrani melaksanakan ibadah pagi sebelum olahraga pagi)',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.17',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'b',
                'indikator' => 'Aktivitas belajar ilmu atau kemampuan spesifik untuk peningkatan Iman dan takwa',
                'no' => '1',
                'keterangan' => 'Ikut aktif sebagai peserta dalam majelis ilmu keagamaan (Pengajian dsb), persekutuan doa, Parisada Hindu Pharma Indonesia (PHDI)',
                'item' => '4 kali atau lebih dalam sebulan (kecuali piket dan sakit tetapi tidak termasuk sakit menahun',
                'bobot' => '1.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'b',
                'indikator' => 'Aktivitas belajar ilmu atau kemampuan spesifik untuk peningkatan Iman dan takwa',
                'no' => '1',
                'keterangan' => 'Ikut aktif sebagai peserta dalam majelis ilmu keagamaan (Pengajian dsb), persekutuan doa, Parisada Hindu Pharma Indonesia (PHDI)',
                'item' => '3 kali dalam sebulan',
                'bobot' => '1.00',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'b',
                'indikator' => 'Aktivitas belajar ilmu atau kemampuan spesifik untuk peningkatan Iman dan takwa',
                'no' => '1',
                'keterangan' => 'Ikut aktif sebagai peserta dalam majelis ilmu keagamaan (Pengajian dsb), persekutuan doa, Parisada Hindu Pharma Indonesia (PHDI)',
                'item' => '2 kali dalam sebulan',
                'bobot' => '0.67',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'b',
                'indikator' => 'Aktivitas belajar ilmu atau kemampuan spesifik untuk peningkatan Iman dan takwa',
                'no' => '1',
                'keterangan' => 'Ikut aktif sebagai peserta dalam majelis ilmu keagamaan (Pengajian dsb), persekutuan doa, Parisada Hindu Pharma Indonesia (PHDI)',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'c',
                'indikator' => 'Kedermawanan sosial dan menjaga kerukunan antar umat beragama',
                'no' => '1',
                'keterangan' => 'Infak dan sedekah (muslim), persembahan (kristen), dana punia (hindu) atau memberikan sumbangan materil ke rumah ibadah',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.44',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'c',
                'indikator' => 'Kedermawanan sosial dan menjaga kerukunan antar umat beragama',
                'no' => '2',
                'keterangan' => 'Terlibat dalam kepanitiaan hari besar keagamaan atau terlibat dalam pengurus tempat ibadah',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.44',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B1',
                'variabel' => 'Keimanan dan Ketakwaan',
                'sub_bab' => 'c',
                'indikator' => 'Kedermawanan sosial dan menjaga kerukunan antar umat beragama',
                'no' => '3',
                'keterangan' => 'Korve bersama di tempat ibadah agama yang berbeda',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.44',
            ],

            // bab 2
            [
                'tingkat' => '1',
                'bab' => 'B2',
                'variabel' => 'Aspek Cinta Tanah Air',
                'sub_bab' => 'a',
                'indikator' => 'Berperan sebagai warga negara Republik Indonesia yang setia pada NKRI, bangga dan cinta tanah air dan Memiliki jiwa nasionalisme dan semangat kebhinekatunggalikaan serta menghormati simbol-simbol persatuan dan kesatuan bangsa (Bahasa, Bendera, Lambangan, dan Lagu Kebangsaan)',
                'no' => '1',
                'keterangan' => 'Mengikuti upacara tanggal 17 setiap bulan atau hari besar nasional dengan baik',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.60',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B2',
                'variabel' => 'Aspek Cinta Tanah Air',
                'sub_bab' => 'a',
                'indikator' => 'Berperan sebagai warga negara Republik Indonesia yang setia pada NKRI, bangga dan cinta tanah air dan Memiliki jiwa nasionalisme dan semangat kebhinekatunggalikaan serta menghormati simbol-simbol persatuan dan kesatuan bangsa (Bahasa, Bendera, Lambangan, dan Lagu Kebangsaan)',
                'no' => '2',
                'keterangan' => 'Menjadi petugas upacara/mengikuti deputasi upacara sesuai Sprin dinas',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.60',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B2',
                'variabel' => 'Aspek Cinta Tanah Air',
                'sub_bab' => 'a',
                'indikator' => 'Berperan sebagai warga negara Republik Indonesia yang setia pada NKRI, bangga dan cinta tanah air dan Memiliki jiwa nasionalisme dan semangat kebhinekatunggalikaan serta menghormati simbol-simbol persatuan dan kesatuan bangsa (Bahasa, Bendera, Lambangan, dan Lagu Kebangsaan)',
                'no' => '3',
                'keterangan' => 'Mampu menghafal lagu-lagu kebangsaan, Pancasila, Tribrata dan catur prasetya, mars dan himne Polri serta himne Taruna dengan baik',
                'item' => 'Hafal 4 item atau lebih',
                'bobot' => '0.60',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B2',
                'variabel' => 'Aspek Cinta Tanah Air',
                'sub_bab' => 'a',
                'indikator' => 'Berperan sebagai warga negara Republik Indonesia yang setia pada NKRI, bangga dan cinta tanah air dan Memiliki jiwa nasionalisme dan semangat kebhinekatunggalikaan serta menghormati simbol-simbol persatuan dan kesatuan bangsa (Bahasa, Bendera, Lambangan, dan Lagu Kebangsaan)',
                'no' => '4',
                'keterangan' => 'Mau mempelajari kesenian daerah lain dan budaya dari daerah lain',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.60',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B2',
                'variabel' => 'Aspek Cinta Tanah Air',
                'sub_bab' => 'a',
                'indikator' => 'Berperan sebagai warga negara Republik Indonesia yang setia pada NKRI, bangga dan',
                'no' => '5',
                'keterangan' => 'Melaporkan kepada atasaannya apabila mengetahui ada hal yang dapat membahayakan dan/atau merugikan negara/pemerintah (laporan diserta dokumentasi)',
                'item' => '1 kali / lebih dalam sebulan',
                'bobot' => '0.60',
            ],

            // bab 3
            [
                'tingkat' => '1',
                'bab' => 'B3',
                'variabel' => 'Demokrasi',
                'sub_bab' => 'a',
                'indikator' => 'Kemampuan menilai persamaan hak dan kewajiban dengan orang lain',
                'no' => '1',
                'keterangan' => 'Mau menerima pendapat orang lain dan memberi kesempatan yang sama dan tidak memonopoli jalannya musyawarah dalam memecahkan sebuah masalah',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B3',
                'variabel' => 'Demokrasi',
                'sub_bab' => 'b',
                'indikator' => 'Berpartisipasi langsung dan aktif dalam pengambilan keputusan',
                'no' => '1',
                'keterangan' => 'Aktif dan berani menyampaikan pendapat pada saat ada arahan pimpinan, forum resmi, dan dalam forum lingkup detasemen dan kompi',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B3',
                'variabel' => 'Demokrasi',
                'sub_bab' => 'c',
                'indikator' => 'Membiasakan musyawarah mufakat dalam mengambil keputusan dengan menjujung tinggi prinsip persamaan dan menghargai pendapat orang lain',
                'no' => '1',
                'keterangan' => 'Mampu menghafal lagu-lagu kebangsaan, Pancasila, Tribrata dan catur prasetya, mars dan himne Polri serta himne Taruna dengan baik',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.33',
            ],

            // bab 4
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'a',
                'indikator' => 'Sikap patuh dan taat terhadap segala bentuk peraturan yang berlaku (di dalam/luar lembaga pendidikan)',
                'no' => '1',
                'keterangan' => 'Menepati dan tidak melanggar semua peraturan dan kegiatan',
                'item' => 'Tidak melakukan pelanggaran dalam sebulan',
                'bobot' => '1.00',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '1',
                'keterangan' => 'Tepat waktu dalam kegiatan pengasuhan rutin dan non rutin',
                'item' => 'Selalu tepat waktu dalam sebulan',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '1',
                'keterangan' => 'Tepat waktu dalam kegiatan pengasuhan rutin dan non rutin',
                'item' => 'Terlambat 1 kali dalam sebulan',
                'bobot' => '0.38',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '1',
                'keterangan' => 'Tepat waktu dalam kegiatan pengasuhan rutin dan non rutin',
                'item' => 'Terlambat 2 kali dalam sebulan',
                'bobot' => '0.25',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '1',
                'keterangan' => 'Tepat waktu dalam kegiatan pengasuhan rutin dan non rutin',
                'item' => 'Terlambat 3 kali dalam sebulan',
                'bobot' => '0.13',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '2',
                'keterangan' => 'Mendapatkan Pujian PUD dari pengasuh',
                'item' => 'Pujian 4 kali atau lebih dalam sebulan',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '2',
                'keterangan' => 'Mendapatkan Pujian PUD dari pengasuh',
                'item' => 'Pujian 3 kali dalam sebulan',
                'bobot' => '0.38',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '2',
                'keterangan' => 'Mendapatkan Pujian PUD dari pengasuh',
                'item' => 'Pujian 2 kali dalam sebulan',
                'bobot' => '0.25',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B4',
                'variabel' => 'Disiplin',
                'sub_bab' => 'b',
                'indikator' => 'Tepat waktu dalam setiap melaksanakan kegiatan dan menaati PUD',
                'no' => '2',
                'keterangan' => 'Mendapatkan Pujian PUD dari pengasuh',
                'item' => 'Pujian 1 kali dalam sebulan',
                'bobot' => '0.13',
            ],

            // bab 5
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '1',
                'keterangan' => 'Menambah waktu belajar mandiri di luar jadwal yang telah ditetapkan dan melaporkan hasil/resume/ringkasan materi yang dipelajari segera setelah kegiatan',
                'item' => '2 kali atau lebih dalam sebulan',
                'bobot' => '0.40',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '1',
                'keterangan' => 'Menambah waktu belajar mandiri di luar jadwal yang telah ditetapkan dan melaporkan hasil/resume/ringkasan materi yang dipelajari segera setelah kegiatan',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.20',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '2',
                'keterangan' => 'Menambah waktu belajar mandiri di Perpustakaan atau membeli buku di Toko Buku dan membuat resume di Luar Jadwal yang Telah Ditetapkan melaporkan hasil/resume/ringkasan buku',
                'item' => '2 kali atau lebih dalam sebulan',
                'bobot' => '0.40',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '2',
                'keterangan' => 'Menambah waktu belajar mandiri di Perpustakaan atau membeli buku di Toko Buku dan membuat resume di Luar Jadwal yang Telah Ditetapkan melaporkan hasil/resume/ringkasan buku',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.20',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '3',
                'keterangan' => 'Melakukan kelompok belajar mandiri atau bergabung ke dalam kelompok penelitian, diskusi, SOP dsb yang melibatkan internal/eksternal Akpol',
                'item' => '2 kali atau lebih dalam sebulan',
                'bobot' => '0.40',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '3',
                'keterangan' => 'Melakukan kelompok belajar mandiri atau bergabung ke dalam kelompok penelitian, diskusi, SOP dsb yang melibatkan internal/eksternal Akpol',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.20',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '4',
                'keterangan' => 'Membantu GIAT operasi kepolisian (Gatur Lalin, TPTKP Lakalantas, sosialisasi Harkamtibmas, dsb)',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.40',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '5',
                'keterangan' => 'Inisiatif meningkatkan kemampuan kesamaptaan dengan olahraga mandiri diluar waktu olahraga rutin dan sebelumnya melaporkan kepada Pawas atau berhasil menurunkan berat badan min 2 kg',
                'item' => '2 kali atau lebih dalam sebulan atau turun min 2kg',
                'bobot' => '0.40',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B5',
                'variabel' => 'Kerja Keras dan Cerdas',
                'sub_bab' => 'a',
                'indikator' => 'Melakukan suatu kegiatan (belajar, peningkatan kesamaptaan jasmani, penyaluran hobi,  pemanfaatan waktu luang) dengan semangat tinggi, gigih, dan bersungguh-sungguh dengan mencurahkan semua daya dan pikiran untuk mencapai prestasi tinggi',
                'no' => '5',
                'keterangan' => 'Inisiatif meningkatkan kemampuan kesamaptaan dengan olahraga mandiri diluar waktu olahraga rutin dan sebelumnya melaporkan kepada Pawas atau berhasil menurunkan berat badan min 2 kg',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.20',
            ],

            // bab 6
            [
                'tingkat' => '1',
                'bab' => 'B6',
                'variabel' => 'Profesional',
                'sub_bab' => 'a',
                'indikator' => 'Kemampuan untuk melksanakan tugas sesuai bidang profesinya serta mengembangkan dan mengaplikasikan ilmu pengetahuan dan keterampilan teknis kepolisian',
                'no' => '1',
                'keterangan' => 'Berperan aktif dalam kelompok-kelompok yang menghasilkan buku panduan atau diktat atau SOP untuk bisa menjalani kehidupan tarunan dengan maksimal pada masing-masing tingkatan atau memberi ide positif/terobosan kreatif dalam kehidupan Taruna atau perbaikan lingkungan yang dituangkan dalam bentuk tulisan',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B6',
                'variabel' => 'Profesional',
                'sub_bab' => 'a',
                'indikator' => 'Kemampuan untuk melksanakan tugas sesuai bidang profesinya serta mengembangkan dan mengaplikasikan ilmu pengetahuan dan keterampilan teknis kepolisian',
                'no' => '2',
                'keterangan' => 'Aktif mengunjungi kesatuan kepolisian di wilayah saat kegiatan diluar kampus (cuti, Weekend, Pesiar) dalam mengetahui perkembangan teknis kepolisian dengan membuat laporan perkembangan teknis kepolisian sesuai materi perkuliahan',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B6',
                'variabel' => 'Profesional',
                'sub_bab' => 'a',
                'indikator' => 'Kemampuan untuk melksanakan tugas sesuai bidang profesinya serta mengembangkan dan mengaplikasikan ilmu pengetahuan dan keterampilan teknis kepolisian',
                'no' => '3',
                'keterangan' => 'Melaksanakan tugas kedinasan (piket) Taruna sesuai ketentuan dalam hal waktu, penampilan, pemahaman tugas dan fungsi, tanggung jawab sesuai tingkatannya',
                'item' => 'Melaksanakan Piket dengan baik (Seluruh Faktor terpenuhi)',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B6',
                'variabel' => 'Profesional',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi terbaik, mental, akademi, dan kesehatan jasmani',
                'no' => '1',
                'keterangan' => 'Prestasi nilai Mental Terbaik detasemen',
                'item' => '10 terbaik tiap semester',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B6',
                'variabel' => 'Profesional',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi terbaik, mental, akademi, dan kesehatan jasmani',
                'no' => '2',
                'keterangan' => 'Prestasi nilai jasmani Terbaik detasemen',
                'item' => '10 terbaik tiap semester',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B6',
                'variabel' => 'Profesional',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi terbaik, mental, akademi, dan kesehatan jasmani',
                'no' => '3',
                'keterangan' => 'Tidak Her Akademik',
                'item' => 'Tidak Her Akademik dalam satu semester',
                'bobot' => '0.33',
            ],

            // bab 7
            [
                'tingkat' => '1',
                'bab' => 'B7',
                'variabel' => 'Sederhana',
                'sub_bab' => 'a',
                'indikator' => 'Mampu menunjukkan sikap bersahaja dan tidak berlebih-lebihan baik dalam perilaku dan penampilan',
                'no' => '1',
                'keterangan' => 'Mengonsumsi makanan yang sudah disiapkan oleh dinas',
                'item' => 'Selalu makan yang disiapkan dinas',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B7',
                'variabel' => 'Sederhana',
                'sub_bab' => 'a',
                'indikator' => 'Mampu menunjukkan sikap bersahaja dan tidak berlebih-lebihan baik dalam perilaku dan penampilan',
                'no' => '2',
                'keterangan' => 'Menggunakan gamtar standar pembagian dari dinas',
                'item' => 'Selalu menggunakan gamtar dinas',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B7',
                'variabel' => 'Sederhana',
                'sub_bab' => 'b',
                'indikator' => 'Mampu mengajak lingkungan sekitarnya untuk mengembangkan sikap hidup dan tutur kata yang sederhana',
                'no' => '1',
                'keterangan' => 'Mampu bersikap hidup sederhana (dengan membawa uang tidak melebihi 5 kali jumlah uang saku yang diberikan lembaga)',
                'item' => 'Selalu bersikap hidup sederhana',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B7',
                'variabel' => 'Sederhana',
                'sub_bab' => 'b',
                'indikator' => 'Mampu mengajak lingkungan sekitarnya untuk mengembangkan sikap hidup dan tutur kata yang sederhana',
                'no' => '2',
                'keterangan' => 'Mampu bertutur kata yang sopan dan tidak menyombongkan diri',
                'item' => 'Selalu bertutur kata yang sopan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B7',
                'variabel' => 'Sederhana',
                'sub_bab' => 'b',
                'indikator' => 'Mampu mengajak lingkungan sekitarnya untuk mengembangkan sikap hidup dan tutur kata yang sederhana',
                'no' => '3',
                'keterangan' => 'Mampu berperilaku sederhana pada saat kegiatan di luar Ksatrian Akpol (nonton/makan/belanja/pesta Kor/kegiatan sosial lainnya)',
                'item' => 'Selalu berperilaku sederhana pada saat kegiatan di luar Ksatrian Akpol (nonton/makan/belanja/pesta Kor/kegiatan sosial lainnya)',
                'bobot' => '0.33',
            ],

            // bab 8
            [
                'tingkat' => '1',
                'bab' => 'B8',
                'variabel' => 'Empati',
                'sub_bab' => 'a',
                'indikator' => 'Kemampuan untuk mengetahui dan ikut merasakan apa yang orang lain pikirkan dan rasakan serta bertindak untuk membantu',
                'no' => '1',
                'keterangan' => 'Menjenguk Taruna/antap Akpol sakit yang dirawat di KSA atau RS rujukan Akpol pada waktu pesiar/IBL/cuti',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.67',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B8',
                'variabel' => 'Empati',
                'sub_bab' => 'a',
                'indikator' => 'Kemampuan untuk mengetahui dan ikut merasakan apa yang orang lain pikirkan dan rasakan serta bertindak untuk membantu',
                'no' => '2',
                'keterangan' => 'Ikut dalam kegiatan baksos atas inisiatif sendiri dan menggunakan biaya pribadi (bukan dari dinas) atau donor darah',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.67',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B8',
                'variabel' => 'Empati',
                'sub_bab' => 'a',
                'indikator' => 'Kemampuan untuk mengetahui dan ikut merasakan apa yang orang lain pikirkan dan rasakan serta bertindak untuk membantu',
                'no' => '3',
                'keterangan' => 'Mengenal lingkungan sekitar dengan berkunjung ke rumah pejabat Akpol',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '0.67',
            ],

            // bab 9
            [
                'tingkat' => '1',
                'bab' => 'B9',
                'variabel' => 'Jujur dan Ikhlas',
                'sub_bab' => 'a',
                'indikator' => 'Mampu untuk bertindak, mengakui, berkata secara jujur apa yang sebenar-benarnya terjadi',
                'no' => '1',
                'keterangan' => 'Membiasakan berkata dan berbuat jujur dalam kesehariannya atau membiasakan pengakuan terhadap kesalahan dan permohonan maaf',
                'item' => 'Selalu membiasakan berkata dan berbuat jujur dalam kesehariannya atau membiasakan pengakuan terhadap kesalahan dan permohonan maaf',
                'bobot' => '1.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B9',
                'variabel' => 'Jujur dan Ikhlas',
                'sub_bab' => 'a',
                'indikator' => 'Mampu untuk bertindak, mengakui, berkata secara jujur apa yang sebenar-benarnya terjadi',
                'no' => '2',
                'keterangan' => 'Berani menegur dan mengingatkan serta melaporkan teman atau orang lain yang melakukan pelanggaran',
                'item' => '1 kali dalam sebulan',
                'bobot' => '1.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B9',
                'variabel' => 'Jujur dan Ikhlas',
                'sub_bab' => 'a',
                'indikator' => 'Mampu untuk bertindak, mengakui, berkata secara jujur apa yang sebenar-benarnya terjadi',
                'no' => '3',
                'keterangan' => 'Jujur dalam kegiatan akademik dengan tidak menitip absen, mencontek saat ujian atau saat mengerjakan tugas (plagiat)',
                'item' => 'Selalu jujur dalam kegiatan akademik dengan tidak mencontek saat ujian atau saat mengerjakan tugas (plagiat)',
                'bobot' => '1.33',
            ],

            // bab 10
            [
                'tingkat' => '1',
                'bab' => 'B10',
                'variabel' => 'Adil',
                'sub_bab' => 'a',
                'indikator' => 'Sikap yang tidak memihak kecuali kepada kebenaran serta berani membela keadilan',
                'no' => '1',
                'keterangan' => 'Mampu berpendapat atau bersikap untuk berpihak kepada kebenaran atau berani membela orang lain yang diperlakukan tidak adil',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '1.00',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B10',
                'variabel' => 'Adil',
                'sub_bab' => 'a',
                'indikator' => 'Sikap yang tidak memihak kecuali kepada kebenaran serta berani membela keadilan',
                'no' => '2',
                'keterangan' => 'Tidak pilih kasih dalam setiap kegiatan dan menjaga keseimbangan antara hak dan kewajiban bersama',
                'item' => '1 kali atau lebih dalam sebulan',
                'bobot' => '1.00',
            ],

            // bab 11
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'a',
                'indikator' => 'Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain',
                'no' => '1',
                'keterangan' => 'Mendapatkan nilai NSP 3 (tiga) terbaik setiap bulannya per Sat',
                'item' => 'Terbaik 1',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'a',
                'indikator' => 'Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain',
                'no' => '1',
                'keterangan' => 'Mendapatkan nilai NSP 3 (tiga) terbaik setiap bulannya per Sat',
                'item' => 'Terbaik 2',
                'bobot' => '0.25',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'a',
                'indikator' => 'Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain',
                'no' => '1',
                'keterangan' => 'Mendapatkan nilai NSP 3 (tiga) terbaik setiap bulannya per Sat',
                'item' => 'Terbaik 3',
                'bobot' => '0.17',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'a',
                'indikator' => 'Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain',
                'no' => '2',
                'keterangan' => 'Penilaian positif atas kinerja sebagai pejabat korp',
                'item' => '4 kali atau lebih dalam sebulan',
                'bobot' => '0.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'a',
                'indikator' => 'Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain',
                'no' => '2',
                'keterangan' => 'Penilaian positif atas kinerja sebagai pejabat korp',
                'item' => '3 kali dalam sebulan',
                'bobot' => '0.25',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'a',
                'indikator' => 'Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain',
                'no' => '2',
                'keterangan' => 'Penilaian positif atas kinerja sebagai pejabat korp',
                'item' => '2 kali dalam sebulan',
                'bobot' => '0.17',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'a',
                'indikator' => 'Memiliki kualitas diri yang unggul baik dalam pemikiran, perbuatan, dan sikap yang dapat menjadi tauladan atau panutan bagi orang lain',
                'no' => '2',
                'keterangan' => 'Penilaian positif atas kinerja sebagai pejabat korp',
                'item' => '1 kali dalam sebulan',
                'bobot' => '0.08',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi berdasarkan sosiometri',
                'no' => '1',
                'keterangan' => 'Masuk peringkat 20 besar sosiometri setingkat detasemen',
                'item' => '1-5 terbaik dalam sebulan',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi berdasarkan sosiometri',
                'no' => '1',
                'keterangan' => 'Masuk peringkat 20 besar sosiometri setingkat detasemen',
                'item' => '6-10 terbaik dalam sebulan',
                'bobot' => '0.38',
            ],

            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi berdasarkan sosiometri',
                'no' => '1',
                'keterangan' => 'Masuk peringkat 20 besar sosiometri setingkat detasemen',
                'item' => '11-15 terbaik dalam sebulan',
                'bobot' => '0.25',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi berdasarkan sosiometri',
                'no' => '1',
                'keterangan' => 'Masuk peringkat 20 besar sosiometri setingkat detasemen',
                'item' => '16-20 terbaik dalam sebulan',
                'bobot' => '0.13',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi berdasarkan sosiometri',
                'no' => '2',
                'keterangan' => 'Masuk peringkat 3 besar sosiometri setingkat satuan',
                'item' => 'Terbaik 1 dalam sebulan',
                'bobot' => '0.50',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi berdasarkan sosiometri',
                'no' => '2',
                'keterangan' => 'Masuk peringkat 3 besar sosiometri setingkat satuan',
                'item' => 'Terbaik 2 dalam sebulan',
                'bobot' => '0.38',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B11',
                'variabel' => 'Teladan',
                'sub_bab' => 'b',
                'indikator' => 'Prestasi berdasarkan sosiometri',
                'no' => '2',
                'keterangan' => 'Masuk peringkat 3 besar sosiometri setingkat satuan',
                'item' => 'Terbaik 3 dalam sebulan',
                'bobot' => '0.25',
            ],

            // bab 12
            [
                'tingkat' => '1',
                'bab' => 'B12',
                'variabel' => 'Integritas',
                'sub_bab' => 'a',
                'indikator' => 'Bertindak konsisten sesuai dengan nilai-nilai kode etik, bertanggung jawab, jujur, benar, menepati kata-kata, setia, dan berkomitmen dan melaksanakan tugas yang diberikan dengan tanggung jawab',
                'no' => '1',
                'keterangan' => 'Aktif Mengunjungi Kesatuan Kepolisian di Wilayah saat Kegiatan di Luar Kampus (cuti, Weekend, pesiar) dalam mengetahui Perkembangan Teknis Kepolisian dengan membuat laporan perkembangan teknis kepolisian sesuai materi perkuliahan',
                'item' => 'Selalu konsisten dan tidak melanggar semua peraturan selama dua bulan berturut-turut',
                'bobot' => '1.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B12',
                'variabel' => 'Integritas',
                'sub_bab' => 'a',
                'indikator' => 'Bertindak konsisten sesuai dengan nilai-nilai kode etik, bertanggung jawab, jujur, benar, menepati kata-kata, setia, dan berkomitmen dan melaksanakan tugas yang diberikan dengan tanggung jawab',
                'no' => '2',
                'keterangan' => 'Mampu mempertahanakn atau meningkatkan prestasi karakter',
                'item' => 'Nilai NSP bulan berikutnya mengalami kenaikan',
                'bobot' => '1.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B12',
                'variabel' => 'Integritas',
                'sub_bab' => 'a',
                'indikator' => 'Bertindak konsisten sesuai dengan nilai-nilai kode etik, bertanggung jawab, jujur, benar, menepati kata-kata, setia, dan berkomitmen dan melaksanakan tugas yang diberikan dengan tanggung jawab',
                'no' => '2',
                'keterangan' => 'Mampu mempertahanakn atau meningkatkan prestasi karakter',
                'item' => 'Nilai NSP tetap (sama dengan bulan sebelumnya)',
                'bobot' => '1.00',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B12',
                'variabel' => 'Integritas',
                'sub_bab' => 'a',
                'indikator' => 'Bertindak konsisten sesuai dengan nilai-nilai kode etik, bertanggung jawab, jujur, benar, menepati kata-kata, setia, dan berkomitmen dan melaksanakan tugas yang diberikan dengan tanggung jawab',
                'no' => '3',
                'keterangan' => 'Melaksanakan deputasi dengan baik',
                'item' => '1 kali atau lebih dalam sebulan (deputasi yang memerlukan latihan)',
                'bobot' => '1.33',
            ],
            [
                'tingkat' => '1',
                'bab' => 'B12',
                'variabel' => 'Integritas',
                'sub_bab' => 'a',
                'indikator' => 'Bertindak konsisten sesuai dengan nilai-nilai kode etik, bertanggung jawab, jujur, benar, menepati kata-kata, setia, dan berkomitmen dan melaksanakan tugas yang diberikan dengan tanggung jawab',
                'no' => '3',
                'keterangan' => 'Melaksanakan deputasi dengan baik',
                'item' => '1 kali atau lebih dalam sebulan (deputasi yang tidak memerlukan latihan)',
                'bobot' => '0.75',
            ],
        ]);

        foreach ($data as $key => $value) {
            AspkarPositif::create($value);
        }
    }
}
