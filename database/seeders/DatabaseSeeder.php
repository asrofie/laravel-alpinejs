<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'Customer 1',
            'email'=> 'customer1@domain.com',
            'password' => bcrypt('12345')
        ]);
        $user->save();
        $p1 = $this->p('Sepatu Adidas', 'item-1.png', '549000');
        $p1->save();
        $p2 = $this->p('Sepatu Pro-ATT', 'item-2.png', '870500');
        $p2->save();
        $p3 = $this->p('Sepatu Nike', 'item-3.png', '349000');
        $p3->save();
        $this->c($user->id, $p1->id, random_int(1,10), $p1->price);
        $this->c($user->id, $p2->id, random_int(1,10), $p2->price);
        $this->c($user->id, $p3->id, random_int(1,10), $p3->price);
    }

    private function c($user, $product, $qty, $price) {
        $cart = new Cart([
            'user_id'=> $user,
            'product_id'=> $product,
            'qty' => $qty,
            'price' => $price
        ]);
        $cart->save();
        return $cart;
    }

    private function p($name, $image, $price) {
        return new Product([
            'name' => $name,
            'image' =>$image,
            'price'=>$price
        ]);
    }

}
