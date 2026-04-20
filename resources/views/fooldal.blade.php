@extends('layouts.app')

@section('content')
    <section class="welcome" style="padding: 100px 20px; background: radial-gradient(circle at center, #1a1a1a 0%, #000 100%); text-align: center;">
        <h1 style="font-size: 4rem; letter-spacing: 10px; text-transform: uppercase; margin: 0;">
            CTRL+<span style="color: #c3ff00; text-shadow: 0 0 25px #c3ff00;">VIBE</span>
        </h1>
    </section>

    <div class="category-divider"></div>

    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
        <h2 style="text-align: center; color: #3cff39; margin-bottom: 60px; letter-spacing: 3px; font-weight: 300;">
            KIEMELT AJÁNLATAINK
        </h2>
        
        <div class="card-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 35px;">
            
            <div class="mycard promo-card" style="border-top: 4px solid #ff0055;">
                <div class="image-wrapper" style="position: relative; overflow: hidden; height: 250px; background: #0a0a0a; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/eger1.png') }}" alt="SkullStorm Viper" style="max-width: 90%; max-height: 90%; object-fit: contain; transition: 0.5s;">
                    <div class="neon-badge" style="position: absolute; top: 15px; right: 15px; background: #ff0055; padding: 5px 15px; box-shadow: 0 0 15px #ff0055; font-weight: bold; color: white; transform: rotate(5deg);">#1 Legjobb egér</div>
                </div>
                <div class="card-body" style="padding: 25px;">
                    <h3 style="color: #c3ff00; font-size: 1.6rem; margin-bottom: 10px;">SkullStorm Viper</h3>
                    <div class="description-box" style="height: 100px; font-size: 0.95rem; line-height: 1.5; color: #ccc; overflow-y: auto;">
                        <p>Egyedi koponya–sárkány mintás gamer egér, dinamikus RGB világítással és nagy pontosságú 12 000 DPI érzékelővel. Kiemelkedő tartósság, csúszásmentes felület és látványos design hardcore gamereknek.</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                        <span style="font-size: 1.5rem; color: #3cff39; font-weight: bold;">22 490 Ft</span>
                        <a href="{{ route('product.index') }}" class="card-button" style="padding: 10px 25px;">Részletek</a>
                    </div>
                </div>
            </div>

            <div class="mycard promo-card" style="border-top: 4px solid #00d4ff;">
                <div class="image-wrapper" style="position: relative; overflow: hidden; height: 250px; background: #0a0a0a; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/billentyuzet10.png') }}" alt="TitanForge Mech" style="max-width: 90%; max-height: 90%; object-fit: contain; transition: 0.5s;">
                    <div class="neon-badge" style="position: absolute; top: 15px; right: 15px; background: #00d4ff; padding: 5px 15px; box-shadow: 0 0 15px #00d4ff; font-weight: bold; color: white; transform: rotate(5deg);">#1 Legjobb billentyűzet</div>
                </div>
                <div class="card-body" style="padding: 25px;">
                    <h3 style="color: #c3ff00; font-size: 1.6rem; margin-bottom: 10px;">Backlit Pro HU</h3>
                    <div class="description-box" style="height: 100px; font-size: 0.95rem; line-height: 1.5; color: #ccc; overflow-y: auto;">
                        <p>Háttérvilágításos magyar kiosztás.</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                        <span style="font-size: 1.5rem; color: #3cff39; font-weight: bold;">15 990 Ft</span>
                        <a href="{{ route('product.index') }}" class="card-button" style="padding: 10px 25px;">Részletek</a>
                    </div>
                </div>
            </div>

            <div class="mycard promo-card" style="border-top: 4px solid #c3ff00;">
                <div class="image-wrapper" style="position: relative; overflow: hidden; height: 250px; background: #0a0a0a; display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/fejhallgato8.png') }}" alt="CyberTrace NeoPulse" style="max-width: 90%; max-height: 90%; object-fit: contain; transition: 0.5s;">
                    <div class="neon-badge" style="position: absolute; top: 15px; right: 15px; background: #c3ff00; padding: 5px 15px; box-shadow: 0 0 15px #c3ff00; font-weight: bold; color: black; transform: rotate(5deg);">#1 Legjobb fejhallgató</div>
                </div>
                <div class="card-body" style="padding: 25px;">
                    <h3 style="color: #c3ff00; font-size: 1.6rem; margin-bottom: 10px;">DeepAudio Max</h3>
                    <div class="description-box" style="height: 100px; font-size: 0.95rem; line-height: 1.5; color: #ccc; overflow-y: auto;">
                        <p>Erőteljes hangzás zenehallgatáshoz.</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                        <span style="font-size: 1.5rem; color: #3cff39; font-weight: bold;">27 990 Ft</span>
                        <a href="{{ route('product.index') }}" class="card-button" style="padding: 10px 25px;">Részletek</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="background: #0a0a0a; padding: 60px 0; margin-top: 80px; border-top: 1px solid #333;">
        <div class="container" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 30px;">
             <div style="text-align: center; max-width: 250px;">
                 <h4 style="color: #3cff39;">INGYENES SZÁLLÍTÁS</h4>
                 <p style="color: #666; font-size: 0.9rem;">Minden 50.000 Ft feletti rendelésnél.</p>
             </div>
             <div style="text-align: center; max-width: 250px;">
                 <h4 style="color: #3cff39;">PRÉMIUM MINŐSÉG</h4>
                 <p style="color: #666; font-size: 0.9rem;">A weboldalon található összes termék szigorú teszteken esett át.</p>
             </div>
             <div style="text-align: center; max-width: 250px;">
                 <h4 style="color: #3cff39;">GAMER SUPPORT</h4>
                 <p style="color: #666; font-size: 0.9rem;">Segítünk a Discord szerverünkön.</p>
             </div>
        </div>
    </div>
@endsection