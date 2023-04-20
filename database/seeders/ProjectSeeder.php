<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $pro = new Project();

            $pro->title = $faker->unique()->sentence($faker->numberBetween(3, 10));
            $pro->description = $faker->sentence($faker->numberBetween(20, 100));
            $pro->website_link = 'https://boolean.careers/?utm_source=google&utm_campaign=it_search_brand&utm_medium=cpc&utm_content=boolean&utm_term=boolean&gclid=Cj0KCQjwxYOiBhC9ARIsANiEIfZ_p3kouf7vQkTQHnFiQhBdc4LHAAgOALXculhBAkDHLPrbcpoK1v4aApaJEALw_wcB';
            $pro->slug = Str::of($pro->title, '-');
            $pro->save();
        }
    }
}
