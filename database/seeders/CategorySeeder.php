<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'event_id'=>'1',
            'category'=>'Festival',
            'quantity'=>'3',
            'price'=>'120000'
        ]);

        DB::table('categories')->insert([
            'event_id'=>'1',
            'category'=>'Cat 1',
            'quantity'=>'0',
            'price'=>'200000'
        ]);

        DB::table('categories')->insert([
            'event_id'=>'2',
            'category'=>'Cat 1',
            'quantity'=>'0',
            'price'=>'130000'
        ]);

        DB::table('categories')->insert([
            'event_id'=>'3',
            'category'=>'Front 1',
            'quantity'=>'3',
            'price'=>'250000'
        ]);

        DB::table('categories')->insert([
            'event_id'=>'4',
            'category'=>'Cat 1',
            'quantity'=>'0',
            'price'=>'340000'
        ]);

        DB::table('categories')->insert([
            'event_id'=>'4',
            'category'=>'Cat 2',
            'quantity'=>'0',
            'price'=>'300000'
        ]);

        DB::table('categories')->insert([
            'event_id'=>'4',
            'category'=>'Cat 3',
            'quantity'=>'0',
            'price'=>'250000'
        ]);

        DB::table('categories')->insert([
            'event_id'=>'4',
            'category'=>'Cat 4',
            'quantity'=>'0',
            'price'=>'110000'
        ]);
    }
}
