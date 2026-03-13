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
                "name" => "Logitech G915 Lightspeed",
                "category_id" => 1,
                "description" => "",
                "price" => 22990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Redragon S113",
                "category_id" => 1,
                "description" => "",
                "price" => 23499,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Keychron K2 V2 Aluminum",
                "category_id" => 1,
                "description" => "",
                "price" => 25990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Logitech Wireless Combo MK270",
                "category_id" => 1,
                "description" => "",
                "price" => 21990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Corsair K65 RGB MINI",
                "category_id" => 1,
                "description" => "",
                "price" => 22499,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Asus ROG Strix Flare II Animate",
                "category_id" => 1,
                "description" => "",
                "price" => 23999,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Razer BlackWidow V3",
                "category_id" => 1,
                "description" => "",
                "price" => 23499,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Razer DeathStalker V2 Pro",
                "category_id" => 1,
                "description" => "",
                "price" => 26999,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Corsair K55 RGB PRO XT",
                "category_id" => 1,
                "description" => "",
                "price" => 24499,
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
            ],
            [
                "name" => "SteelSeries Sensei Ten",
                "category_id" => 2,
                "description" => "",
                "price" => 34999,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Cooler Master MM720 Glossy",
                "category_id" => 2,
                "description" => "",
                "price" => 35499,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HP HyperX Pulsefire Haste",
                "category_id" => 2,
                "description" => "",
                "price" => 29999,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MSI CLUTCH GM30",
                "category_id" => 2,
                "description" => "",
                "price" => 31499,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Asus TUF Gaming M4 Wireless",
                "category_id" => 2,
                "description" => "",
                "price" => 29999,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Asus ROG GLADIUS II ORIGIN PNK LTD",
                "category_id" => 2,
                "description" => "",
                "price" => 32599,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Asus ROG Gladius II Origin",
                "category_id" => 2,
                "description" => "",
                "price" => 37699,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Razer DeathAdder",
                "category_id" => 2,
                "description" => "",
                "price" => 38499,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Asus P705 ROG PUGIO II",
                "category_id" => 2,
                "description" => "",
                "price" => 37899,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Pulsar X2 Mini",
                "category_id" => 2,
                "description" => "",
                "price" => 35499,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
