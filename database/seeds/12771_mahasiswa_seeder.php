<?php

use Illuminate\Database\Seeder;

class 12771_mahasiswa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();  //import library faker
        $limit = 5; //batasan berapa banyak data
        for($i=0; $i < $limit ; $i++){
        	DB::table('12771_model_members')->insert([ //mengisi database
        		'nama' => $faker-> name,
        		'email' => $faker->unique()->email, //email unique shg tdk ada yg sama
        		'password' => $faker->password,
				'macAdress' => $faker->mac_address,
        	]);
    	}
    }
}
