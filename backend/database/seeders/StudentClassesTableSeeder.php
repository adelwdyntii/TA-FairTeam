<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentClass;

class StudentClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Kelas7 = new StudentClass;
        $Kelas7->name = 'Adella Widiyanti';
        $Kelas7->kelas = 'Kelas 7';
        $Kelas7->save();

        $Kelas8 = new StudentClass;
        $Kelas8->name = 'Adelia octaviani';
        $Kelas8->kelas = 'Kelas 8';
        $Kelas8->save();

        $Kelas9 = new StudentClass;
        $Kelas9->name = 'Fajar Saputra';
        $Kelas9->kelas = 'Kelas 9';
        $Kelas9->save();
    }
}
