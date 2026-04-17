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
                "image" => "images/eger1.png",
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
                "image" => "images/eger2.png",
                "stock" => 10,
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
                "stock" => 5,
                "image" => "images/eger3.png",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ClickFast USB",
                "category_id" => 1,
                "description" => "Egyszerű vezetékes egér.",
                "price" => 2990,
                "image" => "images/eger4.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SpeedTrack X",
                "category_id" => 1,
                "description" => "Gyors mozgású gamer egér.",
                "price" => 14990,
                "image" => "images/eger5.png",
                "stock" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "OfficePoint Lite",
                "category_id" => 1,
                "description" => "Megbízható irodai eszköz.",
                "price" => 3990,
                "image" => "images/eger6.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "UltraSense Pro",
                "category_id" => 1,
                "description" => "Nagy pontosságú szenzor.",
                "price" => 17990,
                "image" => "images/eger7.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TravelMouse Mini",
                "category_id" => 1,
                "description" => "Kompakt utazó egér.",
                "price" => 5990,
                "image" => "images/eger8.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MultiClick 7G",
                "category_id" => 1,
                "description" => "Többgombos produktivitási egér.",
                "price" => 13990,
                "image" => "images/eger9.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "AirMove Wireless",
                "category_id" => 1,
                "description" => "Vezeték nélküli egér hosszú üzemidővel.",
                "price" => 8990,
                "image" => "images/eger10.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "KeyMaster 104",
                "category_id" => 2,
                "description" => "Teljes méretű billentyűzet.",
                "price" => 7990,
                "image" => "images/billentyuzet1.png",
                "stock" => 15,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MechaType RGB",
                "category_id" => 2,
                "description" => "Mechanikus RGB billentyűzet.",
                "price" => 29990,
                "image" => "images/billentyuzet2.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SlimKey Wireless",
                "category_id" => 2,
                "description" => "Vékony, vezeték nélküli modell.",
                "price" => 10990,
                "image" => "images/billentyuzet3.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "OfficeKeys Basic",
                "category_id" => 2,
                "description" => "Egyszerű irodai billentyűzet.",
                "price" => 4990,
                "image" => "images/billentyuzet4.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ProType Mechanical",
                "category_id" => 2,
                "description" => "Professzionális mechanikus billentyűzet.",
                "price" => 34990,
                "image" => "images/billentyuzet5.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SilentKeys Soft",
                "category_id" => 2,
                "description" => "Halk gépelésre optimalizált.",
                "price" => 8990,
                "image" => "images/billentyuzet6.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Compact60 Mini",
                "category_id" => 2,
                "description" => "60%-os kompakt kialakítás.",
                "price" => 19990,
                "image" => "images/billentyuzet7.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "GameBoard X",
                "category_id" => 2,
                "description" => "Gamer billentyűzet makrókkal.",
                "price" => 24990,
                "image" => "images/billentyuzet8.png",
                "stock" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ErgoBoard Split",
                "category_id" => 2,
                "description" => "Ergonomikus,
                osztott kialakítás.",
                "price" => 27990,
                "image" => "images/billentyuzet9.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Backlit Pro HU",
                "category_id" => 2,
                "description" => "Háttérvilágításos magyar kiosztás.",
                "price" => 15990,
                "image" => "images/billentyuzet10.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HyperSound X100",
                "category_id" => 3,
                "description" => "Zajszűrős, kényelmes fejhallgató.",
                "price" => 18990,
                "image" => "images/fejhallgato1.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ProBass Wireless",
                "category_id" => 3,
                "description" => "Vezeték nélküli, erős basszus.",
                "price" => 25990,
                "image" => "images/fejhallgato2.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "StudioSound Pro",
                "category_id" => 3,
                "description" => "Stúdió minőségű hangzás.",
                "price" => 34990,
                "image" => "images/fejhallgato3.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LiteBeat H20",
                "category_id" => 3,
                "description" => "Könnyű, hordozható fejhallgató.",
                "price" => 12990,
                "image" => "images/fejhallgato4.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "NoiseBlocker 500",
                "category_id" => 3,
                "description" => "Aktív zajszűrés utazáshoz.",
                "price" => 39990,
                "image" => "images/fejhallgato5.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "GameZone HX",
                "category_id" => 3,
                "description" => "Gamer headset mikrofonnal.",
                "price" => 21990,
                "image" => "images/fejhallgato6.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "UrbanSound Mini",
                "category_id" => 3,
                "description" => "Stílusos, utcai használatra.",
                "price" => 9990,
                "image" => "images/fejhallgato7.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DeepAudio Max",
                "category_id" => 3,
                "description" => "Erőteljes hangzás zenehallgatáshoz.",
                "price" => 27990,
                "image" => "images/fejhallgato8.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ClearTone BT",
                "category_id" => 3,
                "description" => "Bluetooth fejhallgató tiszta hanggal.",
                "price" => 23990,
                "image" => "images/fejhallgato9.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ComfortWear 300",
                "category_id" => 3,
                "description" => "Extra párnázott kialakítás.",
                "price" => 19990,
                "image" => "images/fejhallgato10.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ProControl X",
                "category_id" => 4,
                "description" => "Ergonomikus kialakítású vezeték nélküli kontroller állítható gombokkal és rezgésfunkcióval.",
                "price" => 24990,
                "image" => "images/kontroller.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "GamePad Elite",
                "category_id" => 4,
                "description" => "Prémium kontroller cserélhető joystickokkal és testreszabható profilokkal.",
                "price" => 29990,
                "image" => "images/kontroller2.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "RetroStick Classic",
                "category_id" => 4,
                "description" => "Klasszikus dizájnú kontroller retro játékokhoz, egyszerű kezeléssel.",
                "price" => 9990,
                "image" => "images/kontroller3.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "UltraGrip Controller",
                "category_id" => 4,
                "description" => "Csúszásmentes bevonattal ellátott kontroller hosszú játékmenetekhez.",
                "price" => 19990,
                "image" => "images/kontroller4.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "FusionPad Wireless",
                "category_id" => 4,
                "description" => "Vezeték nélküli kontroller gyors csatlakozással és alacsony késleltetéssel.",
                "price" => 17990,
                "image" => "images/kontroller5.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Arcade Pro Stick",
                "category_id" => 4,
                "description" => "Arcade stílusú joystick kontroller harci játékokhoz és profi használatra.",
                "price" => 34990,
                "image" => "images/kontroller6.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LiteControl Mini",
                "category_id" => 4,
                "description" => "Kompakt méretű kontroller kisebb kezekhez vagy utazáshoz ideális.",
                "price" => 12990,
                "image" => "images/kontroller7.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "NextGen TouchPad",
                "category_id" => 4,
                "description" => "Beépített érintőpaddal és mozgásérzékeléssel rendelkező modern kontroller.",
                "price" => 27990,
                "image" => "images/default.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DualPlay Controller",
                "category_id" => 4,
                "description" => "Két eszközzel is párosítható kontroller gyors váltási lehetőséggel.",
                "price" => 21990,
                "image" => "images/kontroller9.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PowerGrip Turbo",
                "category_id" => 4,
                "description" => "Turbo gombokkal ellátott kontroller gyors reakciót igénylő játékokhoz.",
                "price" => 18990,
                "image" => "images/kontroller10.png",
                "stock" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}