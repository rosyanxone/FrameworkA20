<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalPsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rentps = [
            [
                'id' => '1',
                'merek' => 'Playstation',
                'jenis' => 'Ps 3',
                'harga' => '7000',
                'per_week' => '39900',
            ],
            [
                'id' => '2',
                'merek' => 'Playstation',
                'jenis' => 'Ps 4',
                'harga' => '10000',
                'per_week' => '64900',
            ],
            [
                'id' => '3',
                'merek' => 'Playstation',
                'jenis' => 'Ps 5',
                'harga' => '12000',
                'per_week' => '79900',
            ],
            [
                'id' => '4',
                'merek' => 'Xbox',
                'jenis' => 'Xbox One',
                'harga' => '9000',
                'per_week' => '59900',
            ],
            [
                'id' => '5',
                'merek' => 'Xbox',
                'jenis' => 'Xbox One X',
                'harga' => '11000',
                'per_week' => '69900',
            ]
        ];
        foreach($rentps as $ps) {
            \App\Models\RentalPs::firstOrCreate($ps);
        }
    }
}
