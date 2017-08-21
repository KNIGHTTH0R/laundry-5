<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('orders')->delete();

        for ($i = 0; $i < 10; $i++) {
            Order::create([
                'user_id' => $i,
                'laundry' => $i,
                'ironing' => $i,
                'price' => $i * 10,
                'pickup' => '2017-01-01',
                'delivery' => '2017-01-05',
                'notes' => 'notes' . $i,
            ]);
        }
    }

}
