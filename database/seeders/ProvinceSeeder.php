<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->list() as $key => $value) {
            Province::create([
                'code' => $key,
                'name'  => $value,
            ]);
        }
    }
    protected function list()
    {
        return [
            'LSK' => 'Lusaka',
            'KBW' => 'Kabwe',
            'NDL' => 'Ndola',
            'MAZ' => 'Mazabuka',
            'LST' => 'Livingstone',
            'CHT' => 'Chipata',
        ];
    }
}
