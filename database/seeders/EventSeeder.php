<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'id'=>1,
            'images'=>'1.jpg|2.jpg|3.jpg',
            'title'=>'Coldplay: Music of the Spheres',
            'date'=>'15 November 2023',
            'time'=>'19.00 - 23.00 WIB',
            'location'=>'Stadium Gelora Bung Karno (GBK)',
            'address'=>'Jl. Pintu Satu Senayan, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
            'organizer'=>'PK Entertaiment',
            'price'=>120000,
            'description'=>'1|1|1|1'
        ]);

        DB::table('events')->insert([
            'id'=>2,
            'images'=>'1.jpg|2.jpeg',
            'title'=>'Head In The Clouds (HITC)',
            'date'=>'12 Desember 2022',
            'time'=>'19.00 - 23.00 WIB',
            'location'=>'Stadium Gelora Bung Karno (GBK)',
            'address'=>'Jl. Pintu Satu Senayan, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
            'organizer'=>'88Rising',
            'price'=>130000,
            'description'=>'1|1|1|1'
        ]);

        DB::table('events')->insert([
            'id'=>3,
            'images'=>'1.jpg|2.jpg',
            'title'=>'Semoga Sembuh Intimate Session',
            'date'=>'22 Maret 2022',
            'time'=>'10.00 - 12.00 WIB',
            'location'=>'Stadium Gelora Bung Karno (GBK)',
            'address'=>'Jl. Pintu Satu Senayan, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
            'organizer'=>'Idgitaf',
            'price'=>250000,
            'description'=>'1|1|1|1'
        ]);

        DB::table('events')->insert([
            'id'=>4,
            'images'=>'1.jpg|2.jpg',
            'title'=>'Tulus Tur Manusia 2023',
            'date'=>'11 Januari 2023',
            'time'=>'19.00 - 23.00 WIB',
            'location'=>'Stadium Gelora Bung Karno (GBK)',
            'address'=>'Jl. Pintu Satu Senayan, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
            'organizer'=>'Tulus Company',
            'price'=>340000,
            'description'=>'1|1|1|1'
        ]);
    }
}
