<?php

namespace Database\Seeders;

use App\Models\Champion;
use Illuminate\Database\Seeder;

class ChampionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $champion = new Champion();
        $champion->name = 'anivia';
        $champion->info = 'la mejor uwu';
        $champion->rol = 'mago';
        $champion->save();

        $champion1 = new Champion();
        $champion1->name = 'kled';
        $champion1->info = 'ta re fuerte';
        $champion1->rol = 'luchador';
        $champion1->save();

        $champion2 = new Champion();
        $champion2->name = 'jinx';
        $champion2->info = 'ta re loca owo';
        $champion2->rol = 'tirador';
        $champion2->save();
        
        $champion3 = new Champion();
        $champion3->name = 'zed';
        $champion3->info = 'un asesino de las sombras owo';
        $champion3->rol = 'asesino';
        $champion3->save();

        $champion4 = new Champion();
        $champion4->name = 'malzahar';
        $champion4->info = 'casi el mejor owo';
        $champion4->rol = 'mago';
        $champion4->save();

        $champion5 = new Champion();
        $champion5->name = 'kaisa';
        $champion5->info = 'adc ap owo';
        $champion5->rol = 'tirador';
        $champion5->save();
    }
}
