<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->delete();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'firstname' => 'firstname' . $i,
                'lastname' => 'lastname' . $i,
                'email' => 'email' . $i . '@uts.edu.au',
                'password' => 'password' . $i,
                'phone' => '000000000' . $i,
                'addressline1' => 'addressline1_' . $i,
                'addressline2' => 'addressline2_' . $i,
                'suburb' => 'Sydney',
                'state' => 'NSW',
                'postcode' => '2000',
                'country' => 'Australia',
            ]);
        }
    }

}
