<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MatkulsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkuls')->insert([
            'id' => 1,
            'kode' => 'TI101',
            'matkul' => 'Pemograman Web Lanjut',
            'sks' => 2,
            'kategori' => 'Wajib',
            'smt' => 4,
            'semester' => 'Genap',
            'id_prodi' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
