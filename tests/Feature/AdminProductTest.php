<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class AdminProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_admin_can_delete_product()
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $category = Category::create(['name' => 'Teszt']);
        $product = Product::create([
            'name' => 'Törlendő',
            'category_id' => $category->id,
            'description' => 'Mindjárt eltűnik',
            'price' => 100,
            'stock' => 1
        ]);

        $response = $this->actingAs($admin)->delete(route('admin.products.destroy', $product->id));

        $this->assertSoftDeleted('products', ['id' => $product->id]);
    }
}
