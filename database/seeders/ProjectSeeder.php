<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Factory as ImgFaker;
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

        $img_faker = ImgFaker::create();
        $img_faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($img_faker));
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title =  ucfirst($faker->words(3, true));
            $project->slug = Str::slug($project->title);
            $project->description = $faker->text();
            $project->creation_date = $faker->date();
            $project->img = 'images/' . $img_faker->image('storage/app/public/images', 600, 300, ['cats'], false); //placeholders/sjfdposjadfgpojsdpfo.png
            $project->save();
        }
    }
}
