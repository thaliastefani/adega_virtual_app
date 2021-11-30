<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TipoUvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_uvas')->insert(['nome' =>  'Bonarda']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Cabernet Franc']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Cabernet Sauvignon']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Carmenère']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Gewürztraminer']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Chardonnay']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Malbec']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Pinot Noir / Pinot Nero']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Primitivo']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Sangiovese']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Syrah / Shiraz']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Tannat']);
        DB::table('tipo_uvas')->insert(['nome' =>  'Viognier']);
    }
}