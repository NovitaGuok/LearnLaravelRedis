<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id');
        for($x = 1; $x <= 10; $x++){
        	DB::table('doctors')->insert([
        		'name' => $faker->name,
        		'address' => $faker->address,
        	]);
        }
    }
}
