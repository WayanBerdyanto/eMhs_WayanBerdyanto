<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        for($i=0 ; $i < 10 ; $i++) {
            DB::table('mahasiswa')->insert([
                // 'nim' => '72210481',
                'nim' => $faker->randomNumber(8, true),
                'nama' => $faker->name(),
                'gender' => $faker->lexify(),
                'prodi' => $faker->sentence(1),
                'minat' => $faker->sentence(2),
                // 'email' => Str::random(10).'@gmail.com',
                // 'password' => Hash::make('password'),
            ]);
    }
    }
}
