<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Config::set('sluggable.method', 'str_to_slug');
        $provinces = json_decode(file_get_contents(realpath(__DIR__.'/../../storage/cities.json')), true);
        foreach ($provinces as $province) {
            $tempModel = Province::create(['id' => $province['id'], 'name' => trim($province['name'])]);
            City::insert(array_map(function ($city) use ($tempModel, &$insertedSlugs) {
                return ['province_id' => $tempModel->id, 'name' => trim($city)];
            }, $province['cities']));
        }
    }
}
