<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Factory as ImgFaker;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider as picsumFaker;
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
        $img_faker->addProvider(new picsumFaker($img_faker));
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->title =  ucfirst($faker->words(3, true));
            $project->slug = Str::slug($project->title);
            $project->description = $faker->text();
            $project->creation_date = $faker->date();
            $project->img = $img_faker->image('/storage/public/images', 640, 480);
            $project->save();
        }
    }
}
