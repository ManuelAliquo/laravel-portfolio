<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $newProject = new Project();

            $title = $faker->sentence(3);
            $techPool = ['Laravel', 'React', 'Bootstrap', 'MySQL'];

            $newProject->title = $title;
            $newProject->technologies = $faker->randomElements($techPool, rand(1, 3));
            $newProject->cover_image = "placeholder-img.png";
            $newProject->description = $faker->paragraph();
            $newProject->url_repo = $faker->url();

            $newProject->save();
        }
    }
}
