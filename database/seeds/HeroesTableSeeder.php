<?php

use Illuminate\Database\Seeder;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // テーブルのクリア
      DB::table('heroes')->truncate();

      $heroes = [
        [ 'id'=> 11, 'name'=> 'Dr Nice' ],
        [ 'id'=> 12, 'name'=> 'Narco' ],
        [ 'id'=> 13, 'name'=> 'Bombasto' ],
        [ 'id'=> 14, 'name'=> 'Celeritas' ],
        [ 'id'=> 15, 'name'=> 'Magneta' ],
        [ 'id'=> 16, 'name'=> 'RubberMan' ],
        [ 'id'=> 17, 'name'=> 'Dynama' ],
        [ 'id'=> 18, 'name'=> 'Dr IQ' ],
        [ 'id'=> 19, 'name'=> 'Magma' ],
        [ 'id'=> 20, 'name'=> 'Tornado' ],
      ];


      foreach($heroes as $hero) {
        \App\Hero::create($hero);
      }
    }
}
