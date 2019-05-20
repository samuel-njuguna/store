<?php

use Illuminate\Database\Seeder;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(['name'=>'Samuel','email'=>'samuel.njuguna@aimsoft.co.ke','password'=>bcrypt('S@mnju9$')]);

        $c1 = \App\Customer::create(['name'=>'John Doe','phone'=>'111-222-22','address'=>'Westlands']);
        $c2 = \App\Customer::create(['name'=>'Jane Doe','phone'=>'111-333-33','address'=>'Kilimani']);

        $p1=\App\Product::create(['name'=>'Cement', 'quantity'=>100, 'price'=>450]);
        $p2=\App\Product::create(['name'=>'Nails Pack', 'quantity'=>200, 'price'=>2000]);
        $p3=\App\Product::create(['name'=>'Paint', 'quantity'=>500, 'price'=>1450]);
        $p4=\App\Product::create(['name'=>'Tiles pack', 'quantity'=>800, 'price'=>680]);

        $order_1=\App\Order::create(['customer_id'=>1,'total'=>4000]);
        $order_2=\App\Order::create(['customer_id'=>2,'total'=>6800]);
        $order_3=\App\Order::create(['customer_id'=>1,'total'=>4500]);

        $d1 = \App\OrderDetail::create(['order_id'=>1, 'product_id'=>2, 'quantity'=>2, 'total'=>4000]);
        $d2 = \App\OrderDetail::create(['order_id'=>2, 'product_id'=>1, 'quantity'=>3, 'total'=>4000]);
        $d3 = \App\OrderDetail::create(['order_id'=>3, 'product_id'=>4, 'quantity'=>1, 'total'=>4000]);
    }
}
