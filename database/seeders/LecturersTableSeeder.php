<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = new Lecturer();
        $dosen->nip = '20230001';
        $dosen->nama = 'Dr. Husni Faqih, M.Kom';
        $dosen->keilmuan = 'Ilmu Komputer';
        $dosen->save();
        $dosen = new Lecturer();
        $dosen->nip = '20230002';
        $dosen->nama = 'Dr. Rousyati, M.Kom';
        $dosen->keilmuan = 'Ilmu Komputer';
        $dosen->save();
        $dosen = new Lecturer();
        $dosen->nip = '20230003';
        $dosen->nama = 'Dr. Husni Mubarok, M.Si, S.E';
        $dosen->keilmuan = 'Akuntansi';
        $dosen->save();
    }
}
