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
                "name" => "ClickFast USB",
                "category_id" => 1,
                "description" => "Egyszerű vezetékes egér.",
                "price" => 2990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SpeedTrack X",
                "category_id" => 1,
                "description" => "Gyors mozgású gamer egér.",
                "price" => 14990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "OfficePoint Lite",
                "category_id" => 1,
                "description" => "Megbízható irodai eszköz.",
                "price" => 3990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "UltraSense Pro",
                "category_id" => 1,
                "description" => "Nagy pontosságú szenzor.",
                "price" => 17990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TravelMouse Mini",
                "category_id" => 1,
                "description" => "Kompakt utazó egér.",
                "price" => 5990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MultiClick 7G",
                "category_id" => 1,
                "description" => "Többgombos produktivitási egér.",
                "price" => 13990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "AirMove Wireless",
                "category_id" => 1,
                "description" => "Vezeték nélküli egér hosszú üzemidővel.",
                "price" => 8990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HyperSound X100",
                "category_id" => 2,
                "description" => "Zajszűrős, kényelmes fejhallgató.",
                "price" => 18990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ProBass Wireless",
                "category_id" => 2,
                "description" => "Vezeték nélküli, erős basszus.",
                "price" => 25990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "StudioSound Pro",
                "category_id" => 2,
                "description" => "Stúdió minőségű hangzás.",
                "price" => 34990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LiteBeat H20",
                "category_id" => 2,
                "description" => "Könnyű, hordozható fejhallgató.",
                "price" => 12990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "NoiseBlocker 500",
                "category_id" => 2,
                "description" => "Aktív zajszűrés utazáshoz.",
                "price" => 39990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "GameZone HX",
                "category_id" => 2,
                "description" => "Gamer headset mikrofonnal.",
                "price" => 21990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "UrbanSound Mini",
                "category_id" => 2,
                "description" => "Stílusos, utcai használatra.",
                "price" => 9990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DeepAudio Max",
                "category_id" => 2,
                "description" => "Erőteljes hangzás zenehallgatáshoz.",
                "price" => 27990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ClearTone BT",
                "category_id" => 2,
                "description" => "Bluetooth fejhallgató tiszta hanggal.",
                "price" => 23990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ComfortWear 300",
                "category_id" => 2,
                "description" => "Extra párnázott kialakítás.",
                "price" => 19990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "KeyMaster 104",
                "category_id" => 3,
                "description" => "Teljes méretű billentyűzet.",
                "price" => 7990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MechaType RGB",
                "category_id" => 3,
                "description" => "Mechanikus RGB billentyűzet.",
                "price" => 29990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SlimKey Wireless",
                "category_id" => 3,
                "description" => "Vékony, vezeték nélküli modell.",
                "price" => 10990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "OfficeKeys Basic",
                "category_id" => 3,
                "description" => "Egyszerű irodai billentyűzet.",
                "price" => 4990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ProType Mechanical",
                "category_id" => 3,
                "description" => "Professzionális mechanikus billentyűzet.",
                "price" => 34990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SilentKeys Soft",
                "category_id" => 3,
                "description" => "Halk gépelésre optimalizált.",
                "price" => 8990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Compact60 Mini",
                "category_id" => 3,
                "description" => "60%-os kompakt kialakítás.",
                "price" => 19990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "GameBoard X",
                "category_id" => 3,
                "description" => "Gamer billentyűzet makrókkal.",
                "price" => 24990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ErgoBoard Split",
                "category_id" => 3,
                "description" => "Ergonomikus,
                osztott kialakítás.",
                "price" => 27990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Backlit Pro HU",
                "category_id" => 3,
                "description" => "Háttérvilágításos magyar kiosztás.",
                "price" => 15990,
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}