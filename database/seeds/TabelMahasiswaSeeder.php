<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TabelMahasiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i = 0; $i <= 10; $i++)
        {
            DB::table('mahasiswa')->insert([
                
                'nim' => $faker->randomNumber(8),
                'nama' => $faker->name(),
                'gender' => $faker->randomElement(['Pria', 'Wanita']),
                'jurusan' => 'Teologi',
                'bidang_minat' => $faker->jobTitle()
            ]);
        }
    }
}
