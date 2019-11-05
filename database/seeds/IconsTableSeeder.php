<?php

use Illuminate\Database\Seeder;

class IconsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('icons')->delete();

        \DB::table('icons')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'activity',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'airplay',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'alert-circle',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'align-center',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'align-justify',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'anchor',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'aperture',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'at-sign',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'award',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'bar-chart-2',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'bar-chart',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'battery-charging',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'battery',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'bell-off',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'bell',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'bluetooth',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'bold',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'book',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'bookmark',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'box',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'briefcase',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'calendar',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'camera-off',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'camera',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'cast',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'check-circle',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'check-square',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'check',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'chrome',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'circle',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'clipboard',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'clock',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'cloud-drizzle',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'cloud-lightning',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'cloud-off',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'cloud-rain',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'cloud-snow',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'cloud',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'codepen',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'command',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'compass',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'copy',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'cpu',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'credit-card',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'crop',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'crosshair',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'delete',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'disc',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'download-cloud',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'download',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'droplet',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'edit-2',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'edit-3',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'edit',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'external-link',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'eye-off',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'eye',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'facebook',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'fast-forward',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'feather',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'file-minus',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            61 =>
            array(
                'id' => 62,
                'name' => 'file-plus',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            62 =>
            array(
                'id' => 63,
                'name' => 'file-text',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            63 =>
            array(
                'id' => 64,
                'name' => 'file',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            64 =>
            array(
                'id' => 65,
                'name' => 'film',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            65 =>
            array(
                'id' => 66,
                'name' => 'filter',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            66 =>
            array(
                'id' => 67,
                'name' => 'flag',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            67 =>
            array(
                'id' => 68,
                'name' => 'folder',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            68 =>
            array(
                'id' => 69,
                'name' => 'github',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            69 =>
            array(
                'id' => 70,
                'name' => 'gitlab',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            70 =>
            array(
                'id' => 71,
                'name' => 'globe',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            71 =>
            array(
                'id' => 72,
                'name' => 'grid',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            72 =>
            array(
                'id' => 73,
                'name' => 'hash',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            73 =>
            array(
                'id' => 74,
                'name' => 'headphones',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            74 =>
            array(
                'id' => 75,
                'name' => 'heart',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            75 =>
            array(
                'id' => 76,
                'name' => 'help-circle',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            76 =>
            array(
                'id' => 77,
                'name' => 'home',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            77 =>
            array(
                'id' => 78,
                'name' => 'image',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            78 =>
            array(
                'id' => 79,
                'name' => 'inbox',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            79 =>
            array(
                'id' => 80,
                'name' => 'info',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            80 =>
            array(
                'id' => 81,
                'name' => 'instagram',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            81 =>
            array(
                'id' => 82,
                'name' => 'italic',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            82 =>
            array(
                'id' => 83,
                'name' => 'layers',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            83 =>
            array(
                'id' => 84,
                'name' => 'layout',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            84 =>
            array(
                'id' => 85,
                'name' => 'life-buoy',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            85 =>
            array(
                'id' => 86,
                'name' => 'link-2',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            86 =>
            array(
                'id' => 87,
                'name' => 'link',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            87 =>
            array(
                'id' => 88,
                'name' => 'list',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            88 =>
            array(
                'id' => 89,
                'name' => 'loader',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            89 =>
            array(
                'id' => 90,
                'name' => 'lock',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            90 =>
            array(
                'id' => 91,
                'name' => 'log-in',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            91 =>
            array(
                'id' => 92,
                'name' => 'log-out',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            92 =>
            array(
                'id' => 93,
                'name' => 'mail',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            93 =>
            array(
                'id' => 94,
                'name' => 'map-pin',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            94 =>
            array(
                'id' => 95,
                'name' => 'map',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            95 =>
            array(
                'id' => 96,
                'name' => 'maximize-2',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            96 =>
            array(
                'id' => 97,
                'name' => 'maximize',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            97 =>
            array(
                'id' => 98,
                'name' => 'menu',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            98 =>
            array(
                'id' => 99,
                'name' => 'message-circle',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            99 =>
            array(
                'id' => 100,
                'name' => 'message-square',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            100 =>
            array(
                'id' => 101,
                'name' => 'mic-off',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            101 =>
            array(
                'id' => 102,
                'name' => 'mic',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            102 =>
            array(
                'id' => 103,
                'name' => 'minimize-2',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            103 =>
            array(
                'id' => 104,
                'name' => 'minimize',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            104 =>
            array(
                'id' => 105,
                'name' => 'minus-circle',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            105 =>
            array(
                'id' => 106,
                'name' => 'minus-square',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            106 =>
            array(
                'id' => 107,
                'name' => 'minus',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            107 =>
            array(
                'id' => 108,
                'name' => 'monitor',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            108 =>
            array(
                'id' => 109,
                'name' => 'moon',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            109 =>
            array(
                'id' => 110,
                'name' => 'more-horizontal',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            110 =>
            array(
                'id' => 111,
                'name' => 'more-vertical',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            111 =>
            array(
                'id' => 112,
                'name' => 'move',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            112 =>
            array(
                'id' => 113,
                'name' => 'music',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            113 =>
            array(
                'id' => 114,
                'name' => 'navigation-2',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            114 =>
            array(
                'id' => 115,
                'name' => 'navigation',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            115 =>
            array(
                'id' => 116,
                'name' => 'octagon',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            116 =>
            array(
                'id' => 117,
                'name' => 'gift',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            117 =>
            array(
                'id' => 118,
                'name' => 'shopping-cart',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            118 =>
            array(
                'id' => 119,
                'name' => 'sun',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            119 =>
            array(
                'id' => 120,
                'name' => 'coffee',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            120 =>
            array(
                'id' => 121,
                'name' => 'shopping-bag',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
            121 =>
            array(
                'id' => 122,
                'name' => 'repeat',
                'created_at' => '2018-01-01 12:00:00',
                'updated_at' => '2018-01-01 12:00:00',
            ),
        ));
    }
}
