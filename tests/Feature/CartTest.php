<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class CartTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_authenticated_user_can_add_product_to_cart()
    {
        $user = User::factory()->create();
        $category = Category::create(['name' => 'Egér']);
        $product = Product::create([
            'name' => 'Gamer Mouse',
            'category_id' => $category->id,
            'description' => 'Leírás',
            'price' => 5000,
            'stock' => 10,
            'image' => 'default.png'
        ]);

        $response = $this->actingAs($user)->post(route('cart.store'), [
            'product_id' => $product->id
        ]);

        $response->assertSessionHas('cart');
        $this->assertEquals(1, count(session('cart')));
    }

    public function test_checkout_creates_order()
    {
        $user = User::factory()->create();
        $category = Category::create(['name' => 'Egér']);
        $product = Product::create([
            'name' => 'Gamer Mouse',
            'category_id' => $category->id,
            'description' => 'Leírás',
            'price' => 5000,
            'stock' => 10
        ]);

        $cart = [
            $product->id => [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ]
        ];

        $response = $this->actingAs($user)
                         ->withSession(['cart' => $cart])
                         ->post(route('cart.checkout'));

        $this->assertDatabaseHas('orders', ['user_id' => $user->id]);
        $response->assertRedirect();
        $this->assertEmpty(session('cart'));
    }
}
