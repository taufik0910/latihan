<?php

use Illuminate\Database\Seeder;
use App\Jurusan;
use App\Mmhs;
use App\Dosen;
use App\Makul;
use App\Nnilai;
use App\skripsi;
use App\qjadwal;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  // sample jurusan
$jurusan1 = jurusan::create(['nama_jurusan'=>'Bahasa inggris']);
$jurusan2 = jurusan::create(['nama_jurusan'=>'Sistem Infoemasi']);
$jurusan3 = jurusan::create(['nama_jurusan'=>'Psikologi']);
// sample mahasiswa
$Mmhs1 = Mmhs::create(['id_jurusan'=>$jurusan2->id,'nama'=>'indra','alamat'=>'padang','tlp'=>'0998665','tempat_lahir'=>'padang','tgl_lahir'=>'2017-10-19','agama'=>'islam','kwn'=>'wni','nama_ortu'=>'blo','alamat_ortu'=>'padang','tlp_ortu'=>99884]);
$Mmhs2 = Mmhs::create(['id_jurusan'=>$jurusan2->id,'nama'=>'Raka Irawan','alamat'=>'padang','tlp'=>'0998665','tempat_lahir'=>'padang','tgl_lahir'=>'2017-10-19','agama'=>'islam','kwn'=>'wni','nama_ortu'=>'blo','alamat_ortu'=>'padang','tlp_ortu'=>99884]);


//sample dosen
$dosen1 = Dosen:: create([ 'id_jurusan'=>$jurusan2->id,'nama_dosen'=>'jufriadif naam','telp_dosen'=>'097766','alamat'=>'padang']);
$dosen2 = Dosen:: create([ 'id_jurusan'=>$jurusan2->id,'nama_dosen'=>'Hemma Dessy','telp_dosen'=>'097766','alamat'=>'padang']);

//sample matakuliah
$makul1 =Makul::create(['matakuliah'=>'Bahasa inggris','sks'=>3,'semester'=>'4']);
$makul2 =Makul::create(['matakuliah'=>'Matematika','sks'=>3,'semester'=>'4']);
$makul3 =Makul::create(['matakuliah'=>'Metodologi Penelitian','sks'=>3,'semester'=>'4']);
$makul4 =Makul::create(['matakuliah'=>'metode Peng & Akses','sks'=>2,'semester'=>'4']);
$makul5 =Makul::create(['matakuliah'=>'Bahasa inggris','sks'=>3,'semester'=>'4']);

//sample nilai
$nnilai1=Nnilai::create(['id_makul'=>$makul1->id,'id_mhs'=>$Mmhs1->id,'tugas'=>'3','UTS'=>'3','UAS'=>'4','mutu'=>'A']);
$nnilai2=Nnilai::create(['id_makul'=>$makul2->id,'id_mhs'=>$Mmhs1->id,'tugas'=>'3','UTS'=>'3','UAS'=>'4','mutu'=>'A']);


$skripsi3=skripsi::create(['id_dsn'=>$dosen2->id_dosen,'id_mhs'=>$Mmhs2->id,'judul'=>'mmm']);



$qjadwal= qjadwal::create(['id_mhs'=>$Mmhs1->id,'id_makul'=>$makul1->id,'hari'=>'sabtu','jam'=>'2017-10-19']);



    }
}
