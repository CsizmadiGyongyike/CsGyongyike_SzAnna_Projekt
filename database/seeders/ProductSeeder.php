<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                "name" => "SkullStorm Viper",
                "category_id" => 1,
                "description" => "Egyedi koponya–sárkány mintás gamer egér, dinamikus RGB világítással és nagy pontosságú 12 000
                        DPI érzékelővel. Kiemelkedő tartósság, csúszásmentes felület és látványos design hardcore
                        gamereknek.",
                "price" => 22490,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CyberTrace NeoPulse",
                "category_id" => 1,
                "description" => "Ultramodern, áramköri mintázattal díszített gamer egér, amely a neon kékre és narancsra világító
                        elemeivel futurisztikus hangulatot ad minden setupnak. Precíz 14 000 DPI érzékelője,
                        programozható oldalsó gombjai és a könnyű, ergonomikus kialakítás tökéletes választássá teszik
                        kompetitív játékosok számára is.",
                "price" => 19990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BlazeDragon Inferno FX",
                "category_id" => 1,
                "description" => "Tűzvörös, részletesen kidolgozott sárkánymintával ellátott prémium gamer egér, amely brutális
                        megjelenést és megbízható teljesítményt nyújt. A 16 000 DPI-s érzékelő kristálypontos követést
                        biztosít, az RGB világítás pedig tökéletesen kiemeli a forró, lángoló design részleteit.
                        Ergonomikus formájának köszönhetően hosszú játékmaratonok alatt is kényelmes marad.",
                "price" => 23490,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BlazeDragon Inferno KB",
                "category_id" => 2,
                "description" => "A BlazeDragon Inferno FX gamer egér tökéletes társa: a BlazeDragon Inferno KB mechanikus
                        billentyűzet ugyanazzal a tűzvörös, részletes sárkánymintával érkezik, amely különleges egységet
                        teremt a setupban. A többzónás RGB háttérvilágítás kiemeli a lángoló design minden részletét, a
                        tartós switch-ek pedig villámgyors reakciót biztosítanak. A masszív, prémium kivitel hosszú
                        éveken át bírja az intenzív játékot.",
                "price" => 32990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
