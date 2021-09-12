<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->list() as $key => $value) {
            Country::create([
                'code' => $key,
                'name'  => $value,
            ]);
        }
    }

    protected function list()
    {
        return [
            'AF' => 'Afghanistan',
            'BW' => 'Botswana',
            'CG' => 'Congo',
            'MW' => 'Malawi',
            'MZ' => 'Mozambique',
            'NA' => 'Namibia',
            'ZA' => 'South Africa',
            'TZ' => 'Tanzania',
            'UG' => 'Uganda',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        ];
    }
}
