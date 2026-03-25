1. Futatjuk a `git clone https://github.com/CsizmadiGyongyike/CsGyongyike_SzAnna_Projekt.git` parancsot.
2. Belépünk a le klonozott mappába.
3. Futtatjuk a `composer install` és `npm install` parancsot.
4. Létrehozzunk egy `.env` fájlt és átmásoljuk `.env.example` fájl tartalmát.
5. Futtajuk a  `php artisan key:generate` parancsot.
6. Ha ez megvan létrehozzuk az adatbázist `php artisan migrate` itt rányomunk a yes-re.
7. Utána ezt futtatjuk: `php artisan migrate:fresh --seed`.
8. Utána ezt a parancsot futtatjuk: `npm run build`.
9. Ez után elindítjuk a szervert: `php artisan serve` és `npm run dev`.