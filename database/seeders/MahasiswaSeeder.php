<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::insert([
            [
                'nim' => '2301143005',
                'nama' => 'Zaky',
                'prodi' => 'MI',
                'alamat' => 'Jl. Maharaja Indra',
            ],
            [
                'nim' => '2301143006',
                'nama' => 'Fathur',
                'prodi' => 'TL',
                'alamat' => 'Jl. Maharaja Indra',
            ],
            [
                'nim' => '2301143007',
                'nama' => 'Rahman',
                'prodi' => 'MI',
                'alamat' => 'Jl. Maharaja Indra',
            ],
        ]);
    }
}
