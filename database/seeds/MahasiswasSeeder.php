<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'id' => 1,
            'nim' => 2041720134,
            'nama' => 'Arief Nauvan Ramadha',
            'tempat_lahir' => 'Nganjuk',
            'tanggal_lahir' => date('Y-m-d'),
            'alamat' => 'Perumahan Pondok Kencana',
            'id_prodi' => 1,
            'id_kelas' => 1,
            'agama' => 'Islam',
            'telp' => '081217564952',
            'email' => 'nauvan121@gmail.com',
            'jenis_kelamin' => 'L',
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
