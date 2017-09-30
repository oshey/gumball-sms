<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('countries')->delete();

        // Uncomment the below to run the seeder
        DB::table('countries')->insert(config('countries'));
    }

}
