<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartment::create([
            'ingruma' => '2',
            'tower' => '3',
            'door'  => '2',
            'number'    => '303',
        ]);

        Apartment::create([
            'ingruma' => '2',
            'tower' => '1',
            'door'  => '1',
            'number'    => '107',
        ]);
    }
}
