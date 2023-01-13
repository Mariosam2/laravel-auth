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

        // $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title =  ucfirst($faker->words(3, true));
            $project->slug = Str::slug($project->title);
            $project->description = $faker->text();
            $project->creation_date = $faker->date();
            $project->img = 'images/' . 'placeholder.webp';
            $project->save();
        }
    }
}
