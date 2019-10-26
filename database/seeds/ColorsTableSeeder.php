<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('colors')->delete();

        \DB::table('colors')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Fusion Red',
                'value' => '#fc5c65',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Orange Hibiscus',
                'value' => '#fd9644',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Flirtatious',
                'value' => '#fed330',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Reptile Green',
                'value' => '#26de81',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Maximum Blue Green',
                'value' => '#2bcbba',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Desire',
                'value' => '#eb3b5a',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Beniukon Bronze',
                'value' => '#fa8231',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'NYC Taxi',
                'value' => '#f7b731',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Algal Fuel',
                'value' => '#20bf6b',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Turquoise Topaz',
                'value' => '#0fb9b1',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'High Blue',
                'value' => '#45aaf2',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'C64 NTSC',
                'value' => '#4b7bec',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Lighter Purple',
                'value' => '#a55eea',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Twinkle',
                'value' => '#d1d8e0',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Blue Grey',
                'value' => '#778ca3',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Boyzone',
                'value' => '#2d98da',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Royal Blue',
                'value' => '#3867d6',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Gloomy Purple',
                'value' => '#8854d0',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Innuendo',
                'value' => '#a5b1c2',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Blue Horizon',
                'value' => '#4b6584',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
    }
}
