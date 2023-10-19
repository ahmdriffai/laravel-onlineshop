<?php

use App\Detailorder;
use App\Order;
use App\Rating;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        $rating = Rating::all();
        foreach($rating as $rt) {
            $order = Order::create([
                "ongkir" => $faker->numberBetween(2000, 30000),
                "invoice" => $faker->uuid(),
                "subtotal" => $faker->numberBetween(2000, 300000),
                "status_order_id" => 5,
                "metode_pembayaran" => Arr::random(['cod', 'transfer']),
                'user_id' => $rt->user_id
            ]);


            Detailorder::create([
                'order_id'=> $order->id,
                'product_id' => $rt->product_id,
                'qty'=> $faker->numberBetween(1,30)
            ]);
        }
    }
}
