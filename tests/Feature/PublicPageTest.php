<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublicPageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_public_pages_load_correctly()
    {
        $this->get('/')->assertStatus(200);
        $this->get('/product')->assertStatus(200);
        $this->get('/rolunk')->assertStatus(200);
        $this->get('/kapcsolat')->assertStatus(200);
    }

    public function test_contact_form_submission()
    {
        $formData = [
            'nev1' => 'Teszt',
            'nev2' => 'Elek',
            'email' => 'teszt@elek.hu',
            'uzenet' => 'Ez egy teszt üzenet a vizsgához.'
        ];

        $response = $this->post(route('contact.store'), $formData);

        $this->assertDatabaseHas('messages', [
            'email' => 'teszt@elek.hu'
        ]);
        $response->assertSessionHas('success');
    }
}
