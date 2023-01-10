<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Factory as ImgFaker;
use Bluemmb\Faker\PicsumPhotosProvider as Bluemmb;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $img_faker = ImgFaker::create();
        $img_faker->addProvider(new Bluemmb($img_faker));
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title = $faker->words(3, true);
            $project->img = $img_faker->imageUrl();
            $project->description = $faker->text();
            $project->creation_date = $faker->dateTime();
            $project->save();
        }
    }
}
